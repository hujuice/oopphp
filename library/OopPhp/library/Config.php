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
 * Library area
 */
namespace OopPhp\library;

/**
 * Configuration manager
 *
 * This class manage the application configuration, starting from an
 * ini file.
 * Each section of the file is managed as an object property, while the value
 * of the property is a one dimension, associative array with the corresponding
 * key/value pairs.
 * The configuration is read only.
 *
 * The class implements a variation of the singleton pattern.
 * First, its single instance must be generated invoking the Config::setup()
 * method. Then it can be called by Config::getInstance().
 * @version     1.0.0
 */
class Config
{
    /**
     * The single instance, in the singleton spirit
     * @var \OopPhp\library\Config
     */
    private static $_instance = null;

    /**
     * The configuration, as array
     * @var array
     */
    protected $_conf = array();

    /**
     * Read the configuration file and generate a property for each
     * section.
     *
     * @param string $path  The configuration file path
     * @return void
     * @throw \Exception
     */
    private function __construct($path)
    {
        if (!$this->_conf = parse_ini_file($path, true)) {
            throw new \Exception('Unable to open/parse the configuration file ' . $path . '.');
        }
    }

    /**
     * Initialize the object by giving a configuration file.
     * @param string $path  The configuration file path
     * @return void
     * @throw \Exception
     */
    public static function setup($path)
    {
        if(null === self::$_instance) {
            $c = __CLASS__;
            self::$_instance = new $c($path);
        } else {
            throw new \Exception('The configuration has already been setup.');
        }
    }

    /**
     * Return an instance of itself. If not initialized, throw and Exception
     *
     * The behaviour of this class is similar to the singleton pattern, but
     * it is NOT a singleton. The object initialization requires a configuration
     * flie path, provided by the setup($path) static method.
     * Then, you can access the single instance via the usual getInstance() static method.
     * @return \OopPhp\library\Config
     * @throw \Exception
     */
    public static function getInstance()
    {
        if(null === self::$_instance) {
            throw new \Exception('You MUST initialize the configuration via the setup method before use it.');
        }

        return self::$_instance;
    }

    /**
     * Avoid configuration writings
     * @param string $name  The section name
     * @param mixed $value  The unwanted value
     * @throw \Exception
     */
    public function __set($name, $value)
    {
        throw new \Exception('You are not allowd to hot change the configuration.');
    }

    /**
     * Read configuration sections as array
     * @param string $section   The section name
     * @return array            The configuration key/value pairs
     * @throw \Exception
     */
    public function __get($section)
    {
        if (array_key_exists($section, $this->_conf)) {
            return $this->_conf[$section];
        } else {
            throw new \Exception('Unknown configuration section ' . $section . '.');
        }
    }
}
