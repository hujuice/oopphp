<?php
// Questo è l'unico tratto procedurale dell'applicazione
set_include_path(realpath('../../library/Esercizi') . PATH_SEPARATOR . get_include_path());
require_once 'miniapp/Application.php';
new Application();