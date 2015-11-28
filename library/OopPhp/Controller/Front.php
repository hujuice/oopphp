<?php
/**
 * OopPhp: corso di PHP avanzato
 *
 * LICENSE
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @license     http://opensource.org/licenses/GPL-3.0 GNU General Public License, version 3 (GPL-3.0)
 * @author      Sergio Vaccaro <sergio.vaccaro@istat.it>
 * @copyright   2014 Istat, Italy
 * @version     1.0.0
 */

/**
 * Controller
 */
namespace OopPhp\Controller;

/**
 * Front controller
 *
 * Perform the request analysis
 * Capture parameters
 * Invoke the action
 * Capture the response and the translations
 * Produce the output
 *
 * This class implements the singleton pattern.
 * @uses        \OopPhp\library\Config
 * @uses        \OopPhp\Model\Page
 * @uses        \OopPhp\Controller\Action
 * @uses        \OopPhp\View\Page
 * @version     1.0.0
 */
class Front
{
    /**
     * L'istanza (unica) del controller
     * @var \OopPhp\Controller\Front
     */
    private static $instance = null;

    /**
     * Base url
     * @var string
     */
    protected $_baseUrl;

    /**
     * The request
     * @var stdClass
     */
    protected $_request;

    /**
     * The response
     * @var array
     */
    protected $_response;

    /**
     * Hold the current action
     * @var \OopPhp\Controller\Action
     */
    protected $_action;

    /**
     * Strip the .php extension off the end of a url part
     * @param array $request
     * @return array
     */
    protected function _stripPhpExtension($request)
    {
        foreach($request as & $param) {
            if ('.php' == substr($param, -4)) {
                $param = substr($param, 0, -4);
            }
        }

        return $request;
    }

    /**
     * Analyze the request
     * @return void
     */
    private function __construct()
    {
        // Prepare the empty request
        $this->_request = new \stdClass;
        $this->_request->action = null;
        $this->_request->params = array();

        // Routing
        $request = $_SERVER['REQUEST_URI'];
        $this->_baseUrl = dirname($_SERVER['PHP_SELF']);
        $pratice_path = trim(\OopPhp\library\Config::getInstance()->routing['pratice'], '/');

        if (strpos($request, $this->_baseUrl) === 0) {

            $request = explode('/', trim(substr($request, strlen($this->baseUrl())), '/'));

            if (!$request[0]) {
                $this->_request->action = 'page';
                $this->_request->params = array('index');
            } elseif($name = array_search($request[0], \OopPhp\library\Config::getInstance()->routing)) {
                $this->_request->action = $name;
                array_shift($request);
                $this->_request->params = $this->_stripPhpExtension($request);
            } else {
                $this->_request->action = 'page';
                $this->_request->params = $this->_stripPhpExtension($request);
            }
        } else {
            throw new \Exception('Something went wrong in the Apache rewritings.');
        }
    }

    /**
     * Generate an instance, if not exist, and return it
     * @return \OopPhp\Controller\Front The front controller itself, in the singleton way
     */
    public static function getInstance()
    {
        if(null === self::$instance) {
            $c = __CLASS__;
            self::$instance = new $c();
        }

        return self::$instance;
    }

    /**
     * Give the base url to the whole application
     * @return string
     */
    public function baseUrl()
    {
        if ('/' == $this->_baseUrl) {
            return '';
        } else {
            return $this->_baseUrl;
        }
    }

    /**
     * Return the request object
     * @return stdClass
     */
    public function request()
    {
        return $this->_request;
    }

    /**
     * Invoke the right action
     * @return void
     * @throw \Exception
     */
    public function run()
    {
        $this->_action = new Action();
        $this->_action->{$this->_request->action}($this->_request->params[0]);

        $this->_deploy();
    }

    /**
     * Manage errors
     * @param integer $status The HTTP status code
     * @param string $message The text message
     * @return void
     */
    public function error($status, $message, $trace)
    {
        // Avoid stupid loops
        restore_error_handler();
        restore_exception_handler();

        \OopPhp\library\ErrorManager::getInstance()->log('Action: ' . $this->_request->action, 'LOG');
        foreach ($this->_request->params as $param) {
            \OopPhp\library\ErrorManager::getInstance()->log('Param: ' . $param, 'LOG');
        }

        $this->_action = new Action(); // Completely new action
        $this->_action->error($status, $message);

        $this->_deploy();
    }

    /**
     * Take the action response and deploy the output.
     */
    protected function _deploy()
    {
        $response = $this->_action->getResponse();

        // Some logic could manage and configure views
        $view = new \OopPhp\View\View($response);
    }
}
