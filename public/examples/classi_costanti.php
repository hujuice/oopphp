<?php
/**
 * Una classe qualsiasi
 */
class MyClass
{
    const CONSTANT = 'constant value';

    function showConstant() {
        echo  self::CONSTANT, '<br>';
    }
}

// Anche senza disporre di un'istanza
echo MyClass::CONSTANT, '<br>';

// Disponendo di un'istanza
$class = new MyClass();
echo $class::CONSTANT, '<br>';

// Attraverso la funzione apposita
$class->showConstant();
