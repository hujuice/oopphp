<?php
/**
 * La connesione ad un database MySQL
 */
$dsn = 'mysql:dbname=testdb;host=127.0.0.1';
$user = 'dbuser';
$password = 'dbpass';

/*
$username è una variabile dal contenuto non affidabile
*/

try {
    $dbh = new PDO($dsn, $user, $password);

    // Segnaposto posizionale
    $sql = 'SELECT * FROM users WHERE username = ?';
    $statement1 = $dbh->prepare($sql); // Istanza di PDOStatement
    $statement1->bindValue(1, $username, PDO::PARAM_STR);
    $statement1->execute();
    $result = $satement1->fetchAll(PDO::FETCH_ASSOC);

    // Segnaposto con nome
    $sql = 'SELECT * FROM users WHERE username = :username';
    $statement2 = $dbh->prepare($sql); // Istanza di PDOStatement
    $statement2->bindValue(':username', $username, PDO::PARAM_STR);
    $statement2->execute();
    $result = $satement2->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
