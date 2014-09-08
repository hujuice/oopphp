<?php
// Una classe che lancia un'eccezione
class classWithException
{
    public function __construct($param)
    {
        if ($param) {
            // Do something
        } else {
            throw new Exception('$param non può essere false.', 409);
        }
    }
}

try {
    echo 'Inizio il lavoro.<br>';
    // Some code
    $a = new classWithException(0);
    // Do more
    echo 'È andato tutto bene.<br>';
} catch (Exception $e) {
    echo 'Accidenti, c\'è stato un errore:<br>';
    echo $e->getMessage(), '<br>';
    echo 'L\'errore si è verificato nel file ', $e->getFile(), ', alla linea ', $e->getLine(), '<br>';
}
echo 'In un modo o nell\'altro sono arrivato fino a qui.<br>';
