<?php
// Uso di una classe che implementa il pattern singleton
set_include_path(realpath('../../library/Esercizi') . PATH_SEPARATOR . get_include_path());
require_once 'singleton/Alone.php';

// Questo da errore
//$a = new Alone();

// Questo funziona
$a = Alone::getInstance();

echo $a->saluto(), '<br>', PHP_EOL;
