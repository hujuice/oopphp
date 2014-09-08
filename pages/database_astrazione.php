<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Database - Astrazione',
    'subtitle'  => 'Come schivare le differenze tra prodotti',
    'prev'      => array(
                        'url'   => 'database_prodotti',
                        'label' => 'Database - Estensioni specifiche per prodotto',
                    ),
    'next'      => array(
                        'url'   => 'database_sqlinjection',
                        'label' => 'Database - SQL injection',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/refs.database.vendors.php',
                        'label' => 'Database Vendors',
                    ),
    'content'   => '<div class="jumbotron">
              <h1>Una lingua comune</h1>
              <div class="row">
                <div class="col-md-4"><img src="img/abstraction.png" alt="Astrazione"></div>
                <div class="col-md-8">
                  <p>Una volta individuata una lingua comune (l\'SQL) è possibile concepire degli strumenti di <em>astrazione</em>.</p>
                  <p>Sebbene le interazioni con gli strumenti siano diverse, possiamo affidare al PHP il compito
di gestirle, mentre concentriamo la nostra attività sulla scrittura delle query.</p>
                  <p>L\'astrazione non è un meccanismo perfetto. Prodotti differenti implementano l\'SQL in modo differente,
restituiscono informazioni di servizio in modo differente e gestiscono i dati in modo differente. E non solo.</p>
                  <p>L\'astrazione, tuttavia, ci offre un solido strumento di lavoro e nei casi meno complessi
ci consente di dimenticare le caratteristiche del prodotto utilizzato.</p>
                </div>
              </div>
            </div>',
);
