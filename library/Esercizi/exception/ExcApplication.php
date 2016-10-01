<?php
/**
 * Questa applicazione estende quella del risveglio
 */

// Caricamento della classe parent
require_once 'extends/NewApplication.php';

class ExcApplication extends NewApplication
{
    /**
     * Gestore di eccezioni
     */
    public function exceptionManager(Exception $e)
    {
        ob_clean();

        $message = 'Siamo spiacenti, ma c\'è stato un grosso problema e l\'applicazione non può proseguire.' . PHP_EOL;

        header('HTTP/1.1 500 Internal Server Error');
        echo $message;

        echo $e->getMessage(); // <- Contrario ai criteri di sicurezza!
    }

    /**
     * Aggiunge un gestore di eccezioni
     */
    public function __construct()
    {
        header('Content-Type: text/plain');
        ini_set('display_errors', true); // MAI in produzione!!!
        ini_set('html_errors', 0);

        set_exception_handler(array($this, 'exceptionManager'));

        parent::__construct();
    }

    /**
     * Spara direttamente un'eccezione
     */
    public function run()
    {
        ob_start();

        parent::run();

        throw new Exception('Messaggio che descrive l\'errore interno, cioè i difetti dell\'applicazione.');

        ob_end_flush();
    }
}
