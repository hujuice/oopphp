<?php
/**
 * Namespace per questa classe
 */
namespace my\ns;

class myClass
{
    public function someFunction()
    {
        $a = new anotherClass; // Sarà \my\ns\anotherClass

        $b = new more\anotherClass; // Sarà \my\ns\more\anotherClass

        $c = \their\ns\anotherClass; // Sarà esattamente quello che è scritto

        throw new \Exception('Some message');
    }
}
