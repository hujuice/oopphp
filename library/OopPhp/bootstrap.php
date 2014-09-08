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


/*
$include_path = realpath(__DIR__ . DIRECTORY_SEPARATOR . '..');
define('APPLICATION_PATH', realpath($include_path . DIRECTORY_SEPARATOR . '..'));
set_include_path($include_path . PATH_SEPARATOR . get_include_path());

define('APPLICATION_PATH', realpath(__DIR__ . '/../'));
set_include_path(APPLICATION_PATH . PATH_SEPARATOR . get_include_path());

define('APPLICATION_PATH', realpath(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..'));
set_include_path(realpath(__DIR__ . DIRECTORY_SEPARATOR . '..') . PATH_SEPARATOR . get_include_path());
echo realpath(__DIR__ . DIRECTORY_SEPARATOR . '..');
exit;
*/

// Autoloading
// We need a custom function for this strange bug
// See https://bugs.php.net/bug.php?id=49625
/**
 * Function to authomatically load namespaced classes
 *
 * Simply takes the classname (with namespace) and find the corresponding
 * file.
 *
 * We need a custom function because a 'wontfix' bug
 * @see https://bugs.php.net/bug.php?id=49625
 * @param string $classname The name of the class to load, with namespace
 */
/*
function __autoload($classname)
{
    require_once(str_replace('\\', DIRECTORY_SEPARATOR, $classname . '.php'));
}
spl_autoload_register('__autoload');

// Invoke the application with the given configuration file
$app = new OopPhp\Application(realpath(__DIR__ . '/../../') . DIRECTORY_SEPARATOR . 'config.ini');

// Go, go, go!
$app->run();
*/

define('APPLICATION_PATH', realpath(__DIR__ .
                                    DIRECTORY_SEPARATOR .
                                    '..' .
                                    DIRECTORY_SEPARATOR .
                                    '..'));

// Invoke the application with the given configuration file
require 'Application.php';
$app = new OopPhp\Application(APPLICATION_PATH . DIRECTORY_SEPARATOR . 'config.ini');

// Go, go, go!
$app->run();
