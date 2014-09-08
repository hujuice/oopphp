<?php
/**
 * Una classe semplicissima
 */
class SimpleClass
{
    // property declaration
    public $val = 'a default value<br>';

    // method declaration
    public function displayVal() {
        echo $this->val;
    }
}

// Creazione di un'istanza della classe
$simpleObject = new simpleClass;

// Uso della classe
$simpleObject->displayVal();

// In questo caso elementare, posso ottenere lo stesso risultato con
echo $simpleObject->val;
