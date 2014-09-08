<?php
require_once 'classes/database/data.php';
require_once 'classes/file/data.php';
// Senza namespace avrei avuto un messaggio di errore già qui,
// perché due classi non possono avere lo stesso nome

$dbData   = new database\data;
$fileData = new file\data;

echo database\data::SENTENCE, '<br>';
echo file\data::SENTENCE, '<br>';
