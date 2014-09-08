<?php
// Parametri per generare la pagina
return array(
    'title'     => 'OOP - Concetti generali',
    'subtitle'  => 'Come e perché la programmazione a oggetti',
    'next'      => array(
                        'url'   => 'oop_modularita',
                        'label' => 'OOP - Modularità',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/oop5.intro.php',
                        'label' => 'Classi ed oggetti',
                    ),
    'content'   => '<div class="jumbotron">
              <h1>Parti separate</h1>
              <div class="row">
                <p class="col-md-4"><img src="img/lego.jpg" alt="Lego" width="320" height="240"></p>
                <div class="col-md-8">
                  <p>Quando la nostra attività di sviluppo va oltre la soglia del piccolo task occasionale,
la programmazione procedurale non è più sufficiente e il concetto di <em>funzione</em>
diventa poco più che un palliativo.</p>
                  <p>Abbiamo bisogno di scomporre i problemi in attività più piccole,
ciascuna con una progettazione e una manutenzione separata, sostituibili, la cui realizzazione
sia affidata agli elementi di un team e che si distribuiscano in diversi file in modo naturale.</p>
                  <p>E inoltre abbiamo bisogno di utilizzare parti dei lavori fatti in passato
da noi stessi e parti dei lavori fatti da altri. E quando scriviamo il codice dobbiamo
pensare anche a questa opportunità.</p>
                </div>
              </div>
            </div>',
);
