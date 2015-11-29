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
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Segnaposto posizionale
    $sql = 'SELECT * FROM users WHERE username = ?';
    $statement1 = $dbh->prepare($sql); // Istanza di PDOStatement
    $statement1->bindValue(1, $username, PDO::PARAM_STR);

    // Segnaposto con nome
    $sql = 'SELECT * FROM users WHERE username = :username';
    $statement2 = $dbh->prepare($sql); // Istanza di PDOStatement
    $statement2->bindValue(':username', $username, PDO::PARAM_STR);

} catch (PDOException $e) {
    // Non si deme MAI rivelare ai malintenzionati la natura di un errore
    echo 'Failed: ' . $e->getMessage();
}
