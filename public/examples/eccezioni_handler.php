<?php
// Un'applicazione che gestisce le eccezioni
class Application
{
    public function exceptionManager(Exception $e)
    {
        $message = 'Siamo spiacenti, ma c\'è stato un grosso problema e l\'applicazione non può proseguire.' . PHP_EOL;

        header('HTTP/1.1 500 Internal Server Error');
        header('Content-Type: text/plain');
        echo $message;

        // echo $e->getMessage(); // <- Contrario ai criteri di sicurezza!
    }

    public function __construct($param)
    {
        set_exception_handler(array($this, 'exceptionManager'));

        if ($param) {
            // Do something
        } else {
            throw new Exception('$param non può essere false.');
        }
    }
}

$a = new Application(0);
