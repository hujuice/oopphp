<?php
/**
 * La connesione ad un database SQLite
 */
$dsn = 'sqlite::memory:';
$user = null;
$pass = null;

/*
$username è una variabile dal contenuto non affidabile
Ad esempio, è una variabile inserita dall'utente
*/

try {
    $dbh = new PDO($dsn, $user, $pass);

    // Segnaposto posizionale
    $sql = 'SELECT * FROM users WHERE username = ?';
    $statement = $dbh->prepare($sql); // Istanza di PDOStatement

    // Segnaposto con nome
    $sql = 'SELECT * FROM users WHERE username = :username';
    $statement = $dbh->prepare($sql); // Istanza di PDOStatement
} catch (PDOException $e) {
    echo 'Failed!';
}
