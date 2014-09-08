<?php
// Parametri per generare la pagina
return array(
    'title'     => 'OOP - L\'importanza della progettazione',
    'subtitle'  => 'Parti separate',
    'prev'      => array(
                        'url'   => 'oop_framework',
                        'label' => 'OOP - I framework',
                    ),
    'next'      => array(
                        'url'   => 'classi',
                        'label' => 'Classi di oggetti',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/oop5.intro.php',
                        'label' => 'Classi ed oggetti',
                    ),
    'content' => '<div class="jumbotron">
              <h1>Progettare bene</h1>
              <div class="row">
                <p class="col-md-4 text-center"><img src="img/design.jpg" alt="Design"></p>
                <div class="col-md-8">
                  <p>Si sarà capito che per la programmazione ad oggetti la progettazione è un lavoro
importante e delicato.</p>
                  <p>Dobbiamo pensare in modo nuovo: non più una sequenza di istruzioni, ma una collezione
di parti.</p>
                  <p>Esistono numerose tecniche di progettazione, ad inizare da <a href="http://it.wikipedia.org/wiki/Uml">UML</a>,
ed esistono numerosi <a href="http://it.wikipedia.org/wiki/Design_pattern">design pattern</a> - cioè soluzioni
generali e sperimentate a problemi ricorrenti.</p>
                  <p>Che si disponga o meno di strumenti così sofisticati, è evidente che
per programmare ad oggetti non è sufficiente tuffarsi nella scrittura del codice.</p>
                </div>
              </div>
              <p>Due suggerimenti:</p>
              <ol>
                <li>Scrivere a parole quello che si intende fare è generalmente un ottimo punto di partenza.
Trasformare le idee in concetti verbali è il primo e più naturale lavoro di programmazione del nostro cervello
e ci aiuta sicuramente a generare un progetto.</li>
                <li>L\'approccio <em>top down</em> è il più appropriato per la programmazione a oggetti.
Conviene concepire prima l\'applicazione principale, immaginando - e solo immaginando - gli oggetti di cui
farà uso. Gli oggetti interni, così, si troveranno naturalmente progettati e si dovranno concepire "soltanto"
quelli ancora più interni di cui avranno bisogno.</p>
              </ol>
              <p>Come per tutte le cose, la miglior maestra è l\'esperienza.</p>
            </div>',
);
