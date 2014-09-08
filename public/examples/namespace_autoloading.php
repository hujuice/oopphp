<?php
function loader($classname) {
    require_once('classes' . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $classname . '.php'));
}

spl_autoload_register('loader');

$dbData   = new database\data; // <- I file non sono stati inclusi,
$fileData = new file\data;     // <- ma viene invocata 'loader'

echo database\data::SENTENCE, '<br>';
echo file\data::SENTENCE, '<br>';
