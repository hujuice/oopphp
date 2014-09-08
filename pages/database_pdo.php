<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Database - PDO',
    'subtitle'  => 'Un potente strumento di astrazione',
    'prev'      => array(
                        'url'   => 'database_sqlinjection',
                        'label' => 'Database - SQL injection',
                    ),
    'next'      => array(
                        'url'   => 'pdo_pdo',
                        'label' => 'PDO - PDO',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/book.pdo.php',
                        'label' => 'PDO',
                    ),
    'content'   => '<div class="jumbotron">
              <h1>PHP Data Object</h1>
              <div class="row">
                <div class="col-md-4"><img src="img/pdo_drivers.png" alt="Driver PDO"></div>
                <div class="col-md-8">
                  <p>PDO sta per <em>PHP Data Object</em> ed è il più potente strumento di astrazione del PHP.</p>
                  <p>Si connette ad un database definito da un <a href="http://en.wikipedia.org/wiki/Data_Source_Name">DSN</a>,
cioè una struttura dati che descrive la connessione, le eventuali credenziali di accesso ed eventualmente alcune opzioni
specifiche per prodotto.</p>
                  <p>Attraverso le informazioni contenute nel DSN, PDO si incarica autonomamente di alimentarsi
con i driver necessari gestire l\'astrazione, lasciando che il nostro lavoro si concentri sulla logica delle query.</p>
                </div>
              </div>
            </div>',
);
