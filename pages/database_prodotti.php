<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Database - Estensioni specifiche per prodotto',
    'subtitle'  => 'RDBMS e non solo: scenari diversi',
    'prev'      => array(
                        'url'   => 'database',
                        'label' => 'Il mondo reale: i database',
                    ),
    'next'      => array(
                        'url'   => 'database_astrazione',
                        'label' => 'Database - Astrazione',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/refs.database.vendors.php',
                        'label' => 'Database Vendors',
                    ),
    'content'   => '<div class="jumbotron">
              <h1>Prodotti</h1>
              <div class="row">
                <div class="col-md-4"><img src="img/db_product.png" alt="Prodotti"></div>
                <div class="col-md-8">
                  <p>La lista dei prodotti software che si presentano come database è lunghissima e la lista
dei prodotti per i quali il PHP ci offre strumenti di interazione è altrettanto lunga.</p>
                  <p>Molti di questi sono accomunati da una lingua comune: l\'<strong>SQL</strong>.</p>
                  <p>Esistono altri scenari, tra cui il seducente approccio <strong><a href="http://it.wikipedia.org/wiki/NoSQL">NoSQL</a></strong>
e altre logiche ancora.</p>
                  <p>In questo corso ci occuperemo soltanto di quei database che supportano l\'SQL.</p>
                </div>
              </div>
            </div>',
);
