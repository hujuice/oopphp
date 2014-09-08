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
 * Questa classe gestisce la vista in Json
 *
 * Nota: poiché ci sono due viste, non era il caso di fare una classe astratta?
 */
class JsonView
{
    /**
     * Body content
     *
     * Questa volta ammetto che la proprietà sia pubblica
     * Se voglio imporre delle restrizioni, la rendo privata
     * e uso il magic method __set()
     * @see http://vs2.istat.it/corsophp/classi_magic_properties.php
     * @var array
     */
    public $content = array();

    /**
     * Funzione che scrive il contenuto formattato
     * @return string
     */
    public function deploy()
    {
        echo json_encode((array) $this->content);
    }
}
