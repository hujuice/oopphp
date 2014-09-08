<?php
class Example
{
    // Metodo statico
    public static function factory($type)
    {
        $file = 'classes/' . $type . '.php';

        if (file_exists($file)) {
            require_once $file;
            $classname = $type;

            return new $classname;
        } else {
            // Return some default or throw an Exception
        }
    }
}

//$obj = Example::factory('HTML5');
