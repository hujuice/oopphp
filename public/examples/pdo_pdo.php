<?php
/**
 * La connessione ad un database SQLite
 */
$dsn = 'sqlite::memory:';
$user = null;
$pass = null;

try {
    $dbh = new PDO($dsn, $user, $pass);
    echo 'Connected!';
} catch (PDOException $e) {
    // MAI dare dettagli in produzione: non è sicuro
    //echo 'Connection failed: ' . $e->getMessage();
    echo 'Connection failed...';
}
