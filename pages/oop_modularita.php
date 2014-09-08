<?php
// Parametri per generare la pagina
return array(
    'title'     => 'OOP - Modularità',
    'subtitle'  => 'Parti separate',
    'prev'      => array(
                        'url'   => 'oop_concetti',
                        'label' => 'OOP - Concetti generali',
                    ),
    'next'      => array(
                        'url'   => 'oop_riuso',
                        'label' => 'OOP - Riuso',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/oop5.intro.php',
                        'label' => 'Classi ed oggetti',
                    ),
    'content'   => '<div class="jumbotron">
              <h1>Modularità</h1>
              <div class="row">
                <div class="col-md-4"><img src="img/parts.png" alt="Parts"></div>
                <div class="col-md-8">
                  <p>Scomporre il problema in problemi più piccoli: è questo il nostro obiettivo.</p>
                  <p>I problemi piccoli sono di più facile soluzione, possono essere affrontati e
risolti da una singola persona nel corso di una o poche giornate, possono essere riconsiderati,
in futuro, per trovare soluzioni migliori senza che un\'intera applicazione debba essere rimaneggiata.</p>
                  <p>L\'approccio modulare alla programmazione consiste proprio in questo: scomporre i
problemi in problemi semplici, finché non possano essere risolti da una sola parte. Ogni livello
superiore, poi, avvalendosi delle parti precedenti, diventerà a sua volta un problema semplice.</p>
                </div>
              </div>
            </div>',
);
