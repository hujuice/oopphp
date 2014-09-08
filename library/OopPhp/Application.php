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
 * This is the root namespace of the application
 */
namespace OopPhp;

/**
 * Manage the whole application, in the MVC pattern
 *
 * Here is where you start. You need to provide an external
 * autoloader and basic include path. Then, provide the class
 * with a configuration at the constructor and then run().
 * @uses        \OopPhp\library\Config
 * @uses        \OopPhp\library\ErrorManager
 * @uses        \OopPhp\Controller\Front
 * @version     1.0.0
 */
class Application
{
    /**
     * Autoload classes
     * Simply takes the classname (with namespace) and find the corresponding
     * file.
     *
     * We need a custom function because a 'wontfix' bug
     * @see https://bugs.php.net/bug.php?id=49625
     * @param string $classname The name of the class to load, with namespace
     */
    public static function autoload($classname)
    {
        require_once(realpath(__DIR__ . DIRECTORY_SEPARATOR . '..') . DIRECTORY_SEPARATOR .
                    str_replace('\\', DIRECTORY_SEPARATOR, $classname . '.php'));
    }

    /**
     * Load the configuration file and perform startup operations
     * @param string $config The configuration file complete path
     * @return void
     */
    public function __construct($config)
    {
        // Include path
        set_include_path(realpath(__DIR__ . DIRECTORY_SEPARATOR . '..') . PATH_SEPARATOR . get_include_path());

        // Autoloading
        spl_autoload_register('self::autoload');

        // Read configuration
        library\Config::setup($config);

        // Settings
        date_default_timezone_set(library\Config::getInstance()->main['timezone']);

        // Consider this: http://www.firephp.org/HQ/Use.htm
        $em = library\ErrorManager::getInstance();
        set_error_handler(array($em, 'errorHandler'));
        set_exception_handler(array($em, 'exceptionHandler'));
    }

    /**
     * Drive the whole application process
     * @return void
     */
    public function run()
    {
        ob_start();

        $front = Controller\Front::getInstance();

        $front->run();

        ob_end_flush();
    }
}
