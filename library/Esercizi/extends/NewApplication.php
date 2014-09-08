<?php
/**
 * Questa applicazione estende quella del risveglio
 */

// Caricamento della classe parent
require_once 'miniapp/Application.php';

class NewApplication extends Application
{
    /**
     * Esecuzione
     */
    public function run()
    {
        parent::run();

        echo 'Ora posso andare a comprare il giornale.', PHP_EOL;
    }
}