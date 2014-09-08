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
 * View
 */
namespace OopPhp\View;

/**
 * View
 * @uses        \OopPhp\library\Response
 * @uses        \OopPhp\library\Config
 * @uses        \OopPhp\library\ErrorManager
 * @version     1.0.0
 */
class View
{
    /**
     * Page values
     * @var array
     */
    protected $_page = array();

    /**
     * Templates base path (relative to the include path)
     * @var string
     */
    protected $_templatesPath;

    /**
     * Deploy the page or insert aa partial chunk in it
     * @param string $partial
     */
    protected function _deploy($partial)
    {
        $view = $this;
        $template = $this->_templatesPath . DIRECTORY_SEPARATOR . $partial . '.phtml';

        if (!include($template)) {
            \OopPhp\library\ErrorManager::getInstance()->log('Missing template ' . $template, 'WARN');
            //throw new \Exception('Missing template' . $template);
        }
    }

    /**
     * Retreive the data and output the content
     * @param \OopPhp\library\Response $response
     */
    public function __construct(\OopPhp\library\Response $response)
    {
        // Internal properties
        $this->_templatesPath = APPLICATION_PATH . DIRECTORY_SEPARATOR . \OopPhp\library\Config::getInstance()->paths['templates'];
        $this->_page = $response->page();

        // Headers
        header($response->getStatusAsString());

        // Content
        echo $this->_deploy('layout');
    }

    /**
     * Gives the page values and grant empty values on undefined variables
     * @param string $varname
     * @return mixed
     */
    public function __get($varname)
    {
        if (isset($this->_page[$varname])) {
            return $this->_page[$varname];
        }
    }

    /**
     * Give the main content
     * @return string
     */
    public function content()
    {
        if (!empty($this->_page['files'])) {
            $this->_page['filedir'] = APPLICATION_PATH . DIRECTORY_SEPARATOR .
                                        \OopPhp\library\Config::getInstance()->paths['public'] . DIRECTORY_SEPARATOR .
                                        \OopPhp\library\Config::getInstance()->locations['pratice'];
            $this->_page['url'] = \OopPhp\Controller\Front::getInstance()->baseUrl() . '/' .
                                    \OopPhp\library\Config::getInstance()->locations['pratice'] . '/' .
                                    $this->_page['files'][0];
        }

        if (!empty($this->_page['example'])) {
            $examples_url = \OopPhp\Controller\Front::getInstance()->baseUrl() . '/' .
                            \OopPhp\library\Config::getInstance()->locations['examples'];
            $exampledir = APPLICATION_PATH . DIRECTORY_SEPARATOR . \OopPhp\library\Config::getInstance()->paths['public'] .
                            DIRECTORY_SEPARATOR . \OopPhp\library\Config::getInstance()->locations['examples'];
            $this->_page['exampleurl'] = $examples_url . '/' . $this->_page['example'];
            $this->_page['example'] = $exampledir . DIRECTORY_SEPARATOR . $this->_page['example'];
        }

        if (!empty($this->_page['side'])) {
            $examples_path = \OopPhp\library\Config::getInstance()->locations['examples'];
            $exampledir = APPLICATION_PATH . DIRECTORY_SEPARATOR . \OopPhp\library\Config::getInstance()->paths['public'] . DIRECTORY_SEPARATOR . $examples_path;
            $this->_page['side'] = $exampledir . DIRECTORY_SEPARATOR . $this->_page['side'];
        }

        if ('pratice' == \OopPhp\Controller\Front::getInstance()->request()->action) {
            return $this->_deploy('pratice');
        } elseif(empty($this->_page['files']) && empty($this->_page['example']) && empty($this->_page['side'])) {
            return $this->_deploy('slide');
        } else {
            return $this->_deploy('columns');
        }
    }

    /**
     * Deploy a partial chunk in the page
     * @param string $partial
     */
    public function partial($partial)
    {
        $this->_deploy((string) $partial);
    }
}
