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
 * View namespace
 */
namespace Database\View;

/**
 * View body, in abstract spirit
 *
 * @version 1.0.0
 */
abstract class ViewAbstract
{
    /**
     * The message
     * @var string
     */
    protected $_message = '';

    /**
     * The data
     * @var array
     */
    protected $_data = array();

    /**
     * Set/get the message
     * @param string $message   The body message
     * @return void
     */
    public function message($message = null)
    {
        if (null !== $message) {
            $this->_message = (string) $message;
        }

        return $this->_message;
    }

    /**
     * Set/get the data
     * @param array $data   The body data
     * @return void
     */
    public function data($data = null)
    {
        if (null !== $data) {
            $this->_data = (array) $data;
        }

        return $this->_data;
    }

    /**
     * Return the view content in a structured way
     * @return array        The view data structure for this application
     */
    final protected function _getStructure()
    {
        $structure = array();

        if ($this->_message) {
            $structure['message'] = $this->_message;
        }
        if ($this->_data) {
            $structure['data'] = $this->_data;
        }

        if ($structure) {
            return $structure;
        }
    }

    /**
     * Return the wanted content type
     * @return string       The Content-Type value for this view
     */
    abstract public function contentType();

    /**
     * Return the view in some way
     * @return string       The complete view output
     */
    abstract public function get();

    /**
     * Alias for get
     * @return string       The complete view output
     */
    public function __invoke()
    {
        return $this->get();
    }
}
