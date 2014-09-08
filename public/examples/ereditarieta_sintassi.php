<?php
/**
 * Una classe semplicissima
 */
class baseClass
{
    /**
     * Costruttore
     */
    public function __construct()
    {
        echo 'Inizio dei lavori<br>';
    }

    /**
     * Questo metodo non fa niente
     */
    public function doNothing()
    {
        // Do nothing
    }

    /**
     * Questo metodo fa qualcosa
     */
    public function doSomething()
    {
        echo 'Ciao<br>';
    }
}

/**
 * Un'altra classe semplicissima
 */
class similarClass extends baseClass
{
    /**
     * Nuovo costruttore, che però ha bisogno anche del precedente
     */
    public function __construct()
    {
        echo 'Preparazione<br>';

        parent::__construct();
    }

    /**
     * Questo metodo fa qualcosa
     */
    public function doSomething()
    {
        echo 'Buongiorno<br>';
    }

    /**
     * Questo metodo fa qualcosa in più
     */
    public function doMore()
    {
        echo 'Arrivederci<br>';
    }
}

$saluti = new similarClass;
$saluti->doNothing();
$saluti->doSomething();
$saluti->doMore();
