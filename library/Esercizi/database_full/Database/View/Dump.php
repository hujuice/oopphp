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
 * View class for Text output
 *
 * @use \Database\View\ViewAbstract
 * @version 1.0.0
 */
class Dump extends ViewAbstract
{
    /**
     * Return the wanted content type
     * @return string       The Content-Type value for this view
     */
    public function contentType()
    {
        return 'text/plain';
    }

    /**
     * Format the structure response as json
     * @return string       The complete view output
     */
    public function get()
    {
        return print_r($this->_getStructure(), true);
    }
}
