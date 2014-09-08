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
 * Action controller
 *
 * Controller logic
 * @uses        \OopPhp\library\Response
 * @uses        \OopPhp\Model\Page
 * @uses        \OopPhp\Model\Pratice
 * @version     1.0.0
 */
class Action
{
    /**
     * The response object
     * @var \OopPhp\library\Response
     */
    protected $_response;

    /**
     * Prepare the response
     */
    public function __construct()
    {
        $this->_response = new \OopPhp\library\Response();
    }

    /**
     * Retrieve and prepare page data
     * @param string $name
     */
    public function page($name)
    {
        $page = new \OopPhp\Model\Page($name);
        $this->_response->page($page->get());
    }

    /**
     * Retrieve and prepare pratice data
     * @param string $name
     */
    public function pratice($name)
    {
        $page = new \OopPhp\Model\Pratice($name);
        $this->_response->page($page->get());
    }

    /**
     * Prepare the error response
     * @param integer $status
     * @param string $message
     */
    public function error($status, $message)
    {
        $this->_response->status($status);

        switch($this->_response->status()) {
            case 404:
                $data = '404';
                break;
            default:
                $data = '500';
        }

        $page = new \OopPhp\Model\Page($data);
        $this->_response->page($page->get());
    }

    /**
     * Return the response
     * @return \OopPhp\library\Response
     */
    public function getResponse()
    {
        return $this->_response;
    }
}
