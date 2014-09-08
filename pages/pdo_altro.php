<?php
// Parametri per generare la pagina
return array(
    'title'     => 'PDO - Altro',
    'subtitle'  => 'Uno strumento potente e dalle numerose opportunità',
    'prev'      => array(
                        'url'   => 'pdo_results',
                        'label' => 'PDOStatement - Raccogliere i risultati',
                    ),
    'next'      => array(
                        'url'   => 'best_pratices',
                        'label' => 'Buone pratiche di organizzazione di un\'applicazione',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/book.pdo.php',
                        'label' => 'PDO',
                    ),
    'content'   => '<div class="jumbotron">
              <h1>Uno strumento potente</h1>
              <div class="row">
                <div class="col-md-4"><img src="img/pdo_power.png" alt="Power"></div>
                <div class="col-md-8">
                  <p>PDO è uno strumento potente, di cui abbiamo raccontato solo alcune opportunità.</p>
                  <p>Vale la pena conoscerlo a fondo, dedicando del tempo a studiare i metodi di
<code>PDO</code> e <code>PDOStatement</code>.</p>
                  <p>È in grado di gestire le transazioni, di legare i parametri alle query in modi molto più flessibili
per query ripetute, è in grado di eseguire le query in molti modi e consente di modellare i rislutati in formati
agili.</p>
                  <p>In più, raccoglie le informazioni al contorno sullo stato del database, sull\'esito delle query,
sui messaggi di errore.</p>
                  <p>Se i database sono il vostro lavoro, PDO dovrà essere il vostro strumento principale.</p>
                </div>
              </div>
            </div>',
);
