<?php
/**
 * Questa piccola applicazione legge il dato inserito dall'utente
 * e emette un saluto.
 */

require_once '../../library/Esercizi/form/Form.php';

try {
    $form = new Form($_GET);
    echo $form->saluta(), PHP_EOL;
} catch (Exception $e) {
    header('HTTP/1.1 500 Internal Server Error');
    //echo $e->getMessage();
    echo 'Server error';
}
