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
 * Model
 */
namespace OopPhp\Model;

/**
 * Retrieve page info
 *
 * @uses        \OopPhp\library\Config
 * @version     1.0.0
 */
class Page
{
    /**
     * Store the page data
     * @var array
     */
    protected $_page = array();

    /**
     * Seek page data and examples
     * @param string $name
     */
    public function __construct($name)
    {
        $pagesdir = \OopPhp\library\Config::getInstance()->paths['pages'];

        if ($this->_page = include(APPLICATION_PATH . DIRECTORY_SEPARATOR . $pagesdir . DIRECTORY_SEPARATOR . $name . '.php'))
        {
            // Do nothing
        } else {
            throw new \Exception('Unable to find page data.', 404);
        }
    }

    /**
     * Give the page data
     * @return array
     */
    public function get()
    {
        return $this->_page;
    }

    /**
     * Alias for get()
     * @return array
     */
    public function __invoke()
    {
        return $this->get();
    }
}
