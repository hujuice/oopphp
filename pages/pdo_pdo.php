<?php
// Parametri per generare la pagina
return array(
    'title'     => 'PDO - La classe PDO',
    'subtitle'  => 'Gestire un database',
    'prev'      => array(
                        'url'   => 'database_pdo',
                        'label' => 'Database - PDO',
                    ),
    'next'      => array(
                        'url'   => 'pdo_query',
                        'label' => 'PDO - La scrittura delle query e la classe PDOStatement',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/class.pdo.php',
                        'label' => 'PDO',
                    ),
    'content'   => '<p><code>PDO</code> è una classe di oggetti che rappresenta le connesioni a un database.</p>
            <p>Gli oggetti della classe <code>PDO</code> si creano fornendo al costruttore il <em>DSN</em>,
le credenziali di accesso ed eventualmente alcuni parametri specifici di prodotto.</p>
            <p>Gestisce le query - ma non è lo strumento ideale per eseguirle - e si incarica
della maggior parte dei lavori al contorno, come le transazioni.</p>
            <p class="alert alert-warning">Se la connessione al database fallisce viene sollevata
un\'<strong>eccezione</strong>.</p>
            <p class="alert alert-danger">Gli oggetti della classe <code>PDO</code>, da soli,
possono anche eseguire le query, ma non è consigliabile, soprattutto in ambito web, perché predurerebbe il rischio di <em>SQL injection</em>.</p>
            <p class="alert alert-info">In questi esempi viene usato <a href="https://www.sqlite.org/" class="alert-link">SQLite</a>, per ovvie ragioni di economia e portabilità. In particolare, viene usato un database residente in memoria, la cui vita è limitata a quella dell\'esecuzione del programma.<br>
            Grazie all\'astrazione, però, tutti gli esempi funzionerebbero nello stesso modo anche nelle altre piattaforme, come Oracle, MySQL e le altre.</p>',
    'example'   => basename(__FILE__),
);
