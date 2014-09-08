<?php
// Parametri per generare la pagina
return array(
    'title'     => 'PDOStatement - Raccogliere i risultati',
    'subtitle'  => 'Organizzazione dei dati in uscita',
    'prev'      => array(
                        'url'   => 'pdo_execute',
                        'label' => 'PDOStatement - Eseguire una query',
                    ),
    'next'      => array(
                        'url'   => 'pdo_altro',
                        'label' => 'PDOStatement - Altre opportunità',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/pdostatement.fetchall.php',
                        'label' => 'PDOStatement::fetchAll()',
                    ),
    'content'   => '<p>Se la query è stata una SELECT, vorremo raccogliere i risultati dell\'esecuzione.</p>
            <p><code>PDOStatement</code> fornisce diversi metodi per questo scopo, il più completo
dei quali è probabilmente <code>->fetchAll()</code>.</p>
            <p><code>->fetchAll()</code> a sua volta consegna i dati formattati in diversi modi,
a seconda dell\'argomento che gli viene fornito. Il formato più intuitivo è probabilmente
l\'array i cui elementi (senza chiave) sono le righe della tabella dei risultati e ciascuna riga
è rappresentata a sua volta come array associativo, dove ogni chiave rappresenta il nome
della colonna corrispondente.</p>
            <p>Per ottenere questo formato, l\'argomento di <code>->fetchAll()</code> deve essere
<code>PDO::FETCH_ASSOC</code>.</p>
            <p>L\'esercizio sarà molto più illuminante della spiegazione.</p>
            <div class="panel panel-default">
              <div class="panel-heading">Esercizi</div>
              <div class="panel-body"><a href="esercizi/database.html">Registrazione di un utente in database</div>
            </div>',
    'example'   => basename(__FILE__),
);
