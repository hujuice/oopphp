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
 * Errors' and messages' management
 *
 * Here is a error management system, able to log informations to FirePHP
 *
 * Errors policy
 * When a fatal error (E_ERROR family) occours, it will be converted in Exception with code 500
 * When a warning (like E_WARNING) occours, it will be logged to FirePHP
 * When a notice (like E_NOTICE) occours, it will be logged to FirePHP
 * When an Exception is raised, it will be logged to FirePHP and managed by the controller
 *
 * Message policy
 * When a log is requested, it wil be logged to FirePHP
 * When a info is requested, it wil be logged to FirePHP and given to the controller (green message)
 * When a warning is requested, it wil be logged to FirePHP and given to the controller (yellow message)
 * When an error is requested, it wil be logged to FirePHP and given to the controller (red message)
 * @see         http://www.firephp.org/HQ/Use.htm
 * @uses        \OopPhp\library\Config
 * @uses        \FirePHP
 * @uses        \OopPhp\Controller\Front
 * @version     1.0.0
 */
class ErrorManager
{
    /**
     * Single instance
     * @var \OopPhp\library\ErrorManager
     */
    private static $_instance = null;

    /**
     * FirePHP
     * @var \FirePHP
     */
    protected $_firephp = null;

    /**
     * Instance giver
     * @return ErrorManager
     */
    public static function getInstance()
    {
        if(null === self::$_instance) {
            $c = __CLASS__;
            self::$_instance = new $c();
        }

        return self::$_instance;
    }

    /**
     * Private constructor
     * @return void
     */
    private function __construct()
    {
        $conf = Config::getInstance();

        if ($conf->main['firephp']) {
	require_once 'FirePHP/lib/FirePHPCore/FirePHP.class.php';
            $this->_firephp = \FirePHP::getInstance(true);
        }
    }

    /**
     * Error handler
     * @see http://it1.php.net/manual/en/errorfunc.constants.php
     * @param integer $errno    Error code number
     * @param string $errstr    Error message
     * @param string $errfile   File where error occurred
     * @param integer $errline   Line of the file where the error occurred
     * @return boolean  If false, normal error management follow
     */
    public function errorHandler($errno, $errstr, $errfile, $errline)
    {
        if (in_array($errno, array(E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR, E_USER_ERROR, E_RECOVERABLE_ERROR))) { // Note that most of these cannot be handle
            // Convert errors into Exceptions
            $this->exceptionHandler(new \ErrorException($errstr, 500, $errno, $errfile, $errline)); // Do not throw, try to continue and return true
        } elseif (in_array($errno, array(E_WARNING, E_CORE_WARNING, E_COMPILE_WARNING, E_USER_WARNING))) { // The application will fail?
            if ($this->_firephp) {
                $this->_firephp->warn('An error occurred in ' . $errfile . ', ' . $errline . ' with message: ' . $errno . ' - ' . $errstr);
            }
        } else { // Weak errors
            if ($this->_firephp) {
                $this->_firephp->info('An error occurred in ' . $errfile . ', ' . $errline . ' with message: ' . $errno . ' - ' . $errstr);
            }
        }

        return true;
    }

    /**
     * Exception handler
     * @param \Exception $exception The rised exception
     * @return void
     */
    public function exceptionHandler(\Exception $exception)
    {
        $front = \OopPhp\Controller\Front::getInstance();
        $front->error($exception->getCode(), $exception->getMessage(), $exception->getTrace());

        if ($this->_firephp) {
            $this->_firephp->fb($exception);
        }
    }

    /**
     * Logging system handler
     * @param string $message   The message to display
     * @param string $level     The message level
     * @return void
     */
    public function log($message, $level = 'log')
    {
        if ($this->_firephp) {
            $level = strtolower($level);
            switch ($level) {
                case 'log':
                    $level = 'LOG';
                    break;
                case 'info':
                    $level = 'INFO';
                    break;
                case 'warn':
                    $level = 'WARN';
                    break;
                case 'error':
                    $level = 'ERROR';
                    break;
                default:
                    $this->_firephp->fb('Wrong FirePHP level. Admitted levels are LOG, INFO, WARN, ERROR.', 'LOG');
                    $level = 'LOG';
            }

            $bt = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
            $message .= ' (File ' . $bt[0]['file'] . ', line ' . $bt[0]['line'] . ')';

            $this->_firephp->fb($message, $level);
        }
    }
}
