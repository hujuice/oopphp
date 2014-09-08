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
            <p class="alert alert-warning">Gli oggetti della classe <code>PDO</code>, da soli,
possono anche eseguire le query, ma non è consigliabile, soprattutto in ambito web.</p>
            <p class="alert alert-danger">Se la connessione al database fallisce viene sollevata
un\'<strong>eccezione</strong>.</p>',
    'example'   => basename(__FILE__),
);
