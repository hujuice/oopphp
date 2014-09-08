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
 * Questa applicazione esegue connesisoni al database
 */
class Application
{
    /**
     * Gestore di eccezioni
     */
    public function exceptionManager(Exception $e)
    {
        ob_clean();

        Controller::getInstance()->error($e->getMessage(), $e->getCode());

        ob_end_flush();
    }

    /**
     * Preparazioni
     */
    public function __construct()
    {
        // Aggiunge un gestore di eccezioni
        set_exception_handler(array($this, 'exceptionManager'));

        require_once('Model.php');
        require_once('Controller.php');

        $this->run();
    }

    /**
     * Esecuzione
     */
    public function run()
    {
        ob_start();

        Controller::getInstance()->run();

        ob_end_flush();
    }
}
