<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Database - SQL injection',
    'subtitle'  => 'Attenzione a non produrre una clamorosa vulnerabilità',
    'prev'      => array(
                        'url'   => 'database_astrazione',
                        'label' => 'Database - Astrazione',
                    ),
    'next'      => array(
                        'url'   => 'database_pdo',
                        'label' => 'Database - PDO',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/class.pdostatement.php',
                        'label' => 'PDOStatement',
                    ),
    'content'   => '<p>Quando si lavora con il web, molti dei parametri provengono dall\'utente. Per l\'esattezza,
molti dei parametri provengono dai dati inviati da un client, che essendo nelle piene disponibilità
dell\'utente può comportarsi nei modi più imprevedibili, compresi quelli derivanti da cattive intenzioni.</p>
            <p>Un esempio di vulnerabilità ormai diventato un <em>classico</em> tra le vilnerabilità
è l\'<em><a href="http://it.wikipedia.org/wiki/SQL_injection">SQL injection</a></em>.</p>
            <p>La vulnerabilità si crea quando usiamo i dati forniti dall\'utente (ad esempio
quelli provenienti da un modulo) direttamente come parametri di una query.</p>
            <p>Senza gli adeguati accorgimenti, l\'utente potrebbe inserire come parametri
intere query, che finirebbero per essere eseguite come subquery, devastando il database
o svelando informazioni riservate.</p>
            <p>La protezione dall\'<em>SQL injection</em> si ottiene con l\'uso scrupoloso
degli apici inversi <code>`</code>, con il costante escaping dei caratteri e con continui
controlli sulla natura delle stringhe ricevute.</p>
            <p>È un lavoro lungo e noioso, soggetto all\'errore umano e di cui non si può
mai essere del tutto certi.</p>
            <p>Il PHP risolverà anche questo problema.</p>',
    'side'      => basename(__FILE__),
);
