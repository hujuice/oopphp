<?php
// Uso di una classe che implementa il pattern singleton
header('Content-Type: text/plain');
ini_set('display_errors', true); // MAI in produzione!!!
ini_set('html_errors', 0);

set_include_path(realpath('../../library/Esercizi') . PATH_SEPARATOR . get_include_path());
require_once 'singleton/Alone.php';

// Questo da errore
//$a = new Alone();

// Questo funziona
$a = Alone::getInstance();

echo $a->saluto(), PHP_EOL;
