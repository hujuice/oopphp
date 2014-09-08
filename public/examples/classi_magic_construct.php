<?php
/**
 * Una classe qualsiasi
 */
class MyClass
{
    public function __construct()
    {
        echo 'Ecco sono nato.<br>';
    }

    public function __destruct()
    {
        echo 'Ecco sono morto.<br>';
    }
}

$object = new MyClass();
unset($object);
