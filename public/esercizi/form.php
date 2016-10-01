<!doctype html><html lang="en"><head><title>Greetings</title></head><body><div>
<?php
/**
 * Questa piccola applicazione legge il dato inserito dall'utente
 * e emette un saluto.
 */
ini_set('display_errors', true); // MAI in produzione!!!

require_once '../../library/Esercizi/form/Form.php';

try {
    $form = new Form($_GET);
    echo $form->saluta(), PHP_EOL;
} catch (Exception $e) {
    header('HTTP/1.1 409 Conflict');
    echo $e->getMessage();
}
?>
</div></body></html>

