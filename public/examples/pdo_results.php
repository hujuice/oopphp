<?php
/**
 * A SQLite database class
 */
class db
{
    /**
     * Variabile interna: il dabase handler
     */
    protected $_dbh;

    /**
     * Connessione al database
     */
    public function __construct($dsn, $user, $pass)
    {
        // Connessione
        $this->_dbh = new PDO($dsn, $user, $pass);
        $this->_dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Creazione di una tabella users, se non c'è già
        $sql = 'CREATE TABLE IF NOT EXISTS users (ID INTEGER PRIMARY KEY, username, password, email)';
        $statement = $this->_dbh->prepare($sql);
        $statement->execute();

        // Creazione di almeno una riga di dati
        $sql = 'SELECT count(*) FROM users';
        $statement = $this->_dbh->prepare($sql);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_NUM);
        if (!$result[0]) {
            $password = password_hash('myVerySecretPassword', PASSWORD_DEFAULT);
            $sql = 'INSERT INTO users (ID, username, password, email) VALUES (1, \'nickname\', \'' . $password . '\', \'nickname@domain.tld\')';
            $statement = $this->_dbh->prepare($sql);
            $statement->execute();
        }
    }

    /**
     * Lettura
     */
    public function read($username, $positional = false)
    {
        if ($positional) {
            // Segnaposto posizionale
            $sql = 'SELECT * FROM users WHERE username = ?';
            $statement = $this->_dbh->prepare($sql); // Istanza di PDOStatement
            $statement->bindValue(1, $username, PDO::PARAM_STR);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
            echo 'Risultato ottenuto con il segnaposto posizionale', PHP_EOL;
            print_r($result);
        } else {
            // Segnaposto con nome
            $sql = 'SELECT * FROM users WHERE username = :username';
            $statement = $this->_dbh->prepare($sql); // Istanza di PDOStatement
            $statement->bindValue(':username', $username, PDO::PARAM_STR);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
    }
}

// Configuration
$dsn = 'sqlite::memory:';
$user = null;
$pass = null;

// Run!
header('Content-Type: text/plain');
$db = new db($dsn, $user, $pass);
echo 'Risultato ottenuto con il segnaposto posizionale', PHP_EOL;
print_r($db->read('nickname'));
echo 'Risultato ottenuto con il segnaposto nominale', PHP_EOL;
print_r($db->read('nickname'));
