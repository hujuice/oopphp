<?php
/**
 * Una classe semplicissima
 */
class SimpleClass
{
    // property declaration
    public $var = 'a default value<br>';

    // Una proprietà non accessibile dall'esterno!
    protected $_var_protected = 0;

    // method declaration
    public function displayVar() {
        echo $this->var;
    }
}

// Creazione di un'istanza della classe
$simpleObject = new simpleClass();

// Uso della classe
$simpleObject->displayVar();

// In questo caso elementare, posso ottenere lo stesso risultato con
echo $simpleObject->var;

// Questo genera un errore FATALE!
//echo $simpleObject->_var_protected;
