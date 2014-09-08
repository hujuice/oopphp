<?php
// Una classe che lancia un'eccezione
class classWithException
{
    public function __construct($a)
    {
        if ($a) {
            // Do something
        } else {
            throw new Exception('$a non può essere false.', 409);
        }
    }
}
