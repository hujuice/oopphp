<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Il mondo reale: i database',
    'subtitle'  => 'L\'universo dei dati',
    'prev'      => array(
                        'url'   => 'pattern_mvc',
                        'label' => 'Pattern MVC',
                    ),
    'next'      => array(
                        'url'   => 'database_prodotti',
                        'label' => 'Database - Estensioni specifiche per prodotto',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/refs.database.php',
                        'label' => 'Database',
                    ),
    'content'   => '<div class="jumbotron">
              <h1>I database</h1>
              <div class="row">
                <div class="col-md-4"><img src="img/database.jpg" alt="Database"></div>
                <div class="col-md-8">
                  <p>È difficile immaginare uno scenario del mondo reale in cui non si abbia a che fare con degli
apparati dedicati alla gestione delle informazioni.</p>
                  <p>In un\'applicazione le informazioni provengono da due fonti: dall\'utente, che ci fornisce
una quantità modesta di informazioni legate al suo comportamento, e da archivi che possono essere riconducibili
a scenari anche molto complessi.</p>
                  <p>Abbiamo accesso agli archivi in diversi modi: il nostro archivio, se piccolo, potrebbe risiedere in un file,
oppure potrebbe essere accessibile attraverso le API di un webservice, ma è molto molto probabile che
le nostre applicazioni si alimentino di contenuto informativo attraverso le cominicazioni con un <strong>database</strong>,
probabilmente attraverso un <em>RDBMS</em>.</p>
                </div>
              </div>
            </div>',
);
