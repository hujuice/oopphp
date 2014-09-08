<?php
/**
 * Istat, Corso PHP 20-24 gennaio 2014
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
 * Controller namespace
 */
namespace Database\Controller;

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
 *
 * @uses        \Database\library\Response
 * @uses        \Database\Model\Database
 * @uses        \Database\Controller\Action
 * @version     1.0.0
 */
class Front
{
    /**
     * L'istanza (unica) del controller
     * @var \Database\Controller\Front
     */
    private static $_instance = null;

    /**
     * Hold the request informations
     * @var stdClass
     */
    protected $_request;

    /**
     * Encrypt the password
     * @param string $password      Clear text password
     * @return string               The encrypted password
     */
    protected function _encrypt($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    /**
     * Analyze the request
     * @return void
     */
    private function __construct()
    {
        // The request object
        $this->_request = new \stdClass;

        // Method
        $this->_request->method = $_SERVER['REQUEST_METHOD'];

        // POST data
        $this->_request->post = $_POST;

        // Query
        $this->_request->query = $_GET;

        // Authenitcaton credentials
        if (isset($_SERVER['PHP_AUTH_USER'])) {
            $this->_request->user = $_SERVER['PHP_AUTH_USER'];
        } else {
            $this->_request->user = null;
        }
        if (isset($_SERVER['PHP_AUTH_PW'])) {
            $this->_request->password = $_SERVER['PHP_AUTH_PW'];
        } else {
            $this->_request->password = null;
        }

        // Prepare the action controller
        $this->_action = new Action();
    }

    /**
     * Generate an instance, if not exist, and return it
     * @return \Database\Controller\Front The front controller itself, in the singleton way
     */
    public static function getInstance()
    {
        if(null === self::$_instance) {
            $class = __CLASS__;
            self::$_instance = new $class;
        }

        return self::$_instance;
    }

    /**
     * Analyze the request and invoke the right action
     * @return void
     * @throw \Exception
     */
    public function run()
    {
        // Prepare the action controller
        $action = new Action();

        // GET requests, no authentication
        if ('GET' == $this->_request->method) {

            // User profile request
            if(isset($this->_request->query['user'])) {
                // Invoke the action
                $action->user($this->_request->query['user']);

            // User list
            } else {

                // Limit and offset
                if (isset($this->_request->query['limit'])) {
                    $limit = $this->_request->query['limit'];
                } else {
                    $limit = 10;
                }
                if (isset($this->_request->query['offset'])) {
                    $offset = $this->_request->query['offset'];
                } else {
                    $offset = 0;
                }

                // Invoke the action
                $action->userlist($limit, $offset);
            }

        // POST requests, no authentication
        } elseif ('POST' == $this->_request->method) {
            // Invoke the action
            $action->create($this->_request->post);

        // Authentication management
        } elseif ($this->_request->user && $this->_request->password) {
            if ($id = \Database\Model\Database::getInstance()->verifyCredentials($this->_request->user, $this->_request->password)) {

                // PUT request
                if ('PUT' == $this->_request->method) {
                    $action->update($id, $this->_request->post);

                // DELETE request
                } elseif ('DELETE' == $this->_request->method) {
                    $action->delete($id);

                // Unknown method
                } else {
                    $action->error('The HTTP method MUST be one from GET, POST, UPDATE, DELETE.', 405);
                }

            } else {
                $action->authRequest('Invalid credentials.');
            }
        } else {
            $action->authRequest('You MUST authenticate to access.');
        }

        \Database\library\Response::getInstance()->deploy();
    }

    /**
     * Manage errors
     * @param string $message The text message
     * @param integer $status The HTTP status code
     * @return void
     */
    public function error($message, $status)
    {
        $action = new Action(); // Completely new action
        $action->error($message, $status);

        \Database\library\Response::getInstance()->deploy();
    }
}
