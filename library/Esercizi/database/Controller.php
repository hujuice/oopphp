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
 * Questa classe gestisce tutto
 */
class Controller
{
    /**
     * L'istanza (unica) del controller
     * @var Controller
     */
    private static $_instance = null;

    /**
     * Singleton
     */
    private function __construct()
    {
        // Do nothing
    }

    /**
     * Get unique instance
     * @return Controller     The controller instance, in the singleton way
     */
    public static function getInstance()
    {
        if(null === self::$_instance) {
            $class = __CLASS__;
            self::$_instance = new $class();
        }

        return self::$_instance;
    }

    /**
     * Esecuzione
     */
    public function run()
    {
        // Gestione della richiesta
        $name = $_POST['name'];
        $password = $_POST['password'];
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
        } else {
            $email = '';
        }

        // Creazione del modello e inserimento dei dati
        $database = new Model;
        $database->insert($name, $password, $email);

        // Gestione della vista
        /*
        Per l'esercizio sono state preparate due viste:
        JsonView e HtmlView

        Ci si può divertire a cambiare vista, ricordando che per
        l'html il Content-Type è text/html
        Oppure si può guardare cose succede se si sbaglia

        Nota: visto che per creare la vista ci vogliono tre passaggi,
        qui sarebbe stato proprio utile un "factory pattern"
        http://vs2.istat.it/corsophp/pattern_factory.php

        header('Content-Type: text/html');
        require 'HtmlView.php';
        $view = new HtmlView;

        */
        header('Content-Type: application/json');
        require 'JsonView.php';
        $view = new JsonView;

        // Passaggio del contenuto alla vista (proprietà pubblica)
        $view->content = $database->last();

        // Output
        $view->deploy();
    }

    /**
     * Gestione degli errori
     * @param string $message   Il messagio di errore
     * @param integer $code     Il codice di errore
     */
    public function error($message, $status = 500)
    {
        header('HTTP/1.1 500 Internal Server Error');

        // Si poteva usare la vista anche qui!
        header('Content-Type: text/plain');
        echo 'C\'è stato un errore', PHP_EOL;
        echo $message, PHP_EOL;
    }
}
