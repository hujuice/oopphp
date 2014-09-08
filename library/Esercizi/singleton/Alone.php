<?php
/**
 * Classe di esempio, che implementa il pattern singleton
 *
 * Non si può accedere al costruttore della classe.
 * L'unico modo per accedere ad un'istanza della classe
 * è usare il metodo statico getInstance(), che restituisce
 * un'unica istanza.
 */
class Alone
{
    /**
     * L'istanza della classe
     * @var Alone
     */
    private static $_instance = null;

    /**
     * Il costruttore, privato
     */
    private function __construct()
    {
        // Blocca la creazione dell'oggetto
    }

    /**
     * Il metodo statico che ci permette di accedere
     * all'unica istanza della classe.
     */
    public static function getInstance()
    {
        if (null === self::$_instance) {
            $class = __CLASS__;
            self::$_instance = new $class();
        }

        return self::$_instance;
    }

    /**
     * Un metodo qualsiasi
     * @return string
     */
    public function saluto()
    {
        return 'Ciao';
    }
}