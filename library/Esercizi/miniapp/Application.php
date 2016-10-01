<?php
/**
 * Questa applicazione racconta un risveglio
 */
class Application
{
    /**
     * Preparazioni
     */
    public function __construct()
    {
        header('Content-Type: text/plain');
        ini_set('display_errors', true); // MAI in produzione!!!
        ini_set('html_errors', 0);

        require_once('Moka.php');
        require_once('Cup.php');
        require_once('Dog.php');

        $this->run();
    }

    /**
     * Esecuzione
     */
    public function run()
    {
        echo 'Yawn...', PHP_EOL;

        $moka = new Moka();
        $moka->prepare('arabic');

        // Toilet operations are censored

        $cup = $moka->give();
        echo $cup->drink(), PHP_EOL;

        $dog = new Dog();
        echo $dog->getOut(), PHP_EOL;
    }
}
