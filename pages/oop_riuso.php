<?php
// Parametri per generare la pagina
return array(
    'title'     => 'OOP - Riuso',
    'subtitle'  => 'Parti separate',
    'prev'      => array(
                        'url'   => 'oop_modularita',
                        'label' => 'OOP - Modularità',
                    ),
    'next'      => array(
                        'url'   => 'oop_collaborazione',
                        'label' => 'OOP - Lavoro in team',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/oop5.intro.php',
                        'label' => 'Classi ed oggetti',
                    ),
    'content'   => '<div class="jumbotron">
              <h1>Riuso</h1>
              <div class="row">
                <p class="col-md-4"><img src="img/recycle.png" alt="Recycle" width="320" height="320"></p>
                <div class="col-md-8">
                  <p>Ogni volta che un piccolo problema è stato risolto, è molto probabile
che quella soluzione possa essere adottata anche in altre occasioni.</p>
                  <p>Un modulo che si incarichi di gestire le connessioni a un database o
il consumo di un webservice sarà utile tutte le volte che abbiamo a che fare con quel database
o con quel webservice.</p>
                  <p>Il riuso non è solo nostro, ma è di tutta la comunità degli sviluppatori.</p>
                  <p>Quando si ha bisogno di una funzionalità, la prima operazione da compiere
è cercare soluzioni già pronte, magari già sottoposte a test, magari prodotte da un team
di sviluppatori molto qualificato.</p>
                  <p>Viceversa, quando scriviamo un modulo, dobbiamo ricordare che noi stessi o
i nostri colleghi o la comunità potremmo avere la stessa necessità o necessità simili in un futuro vicino.</p>
                </div>
              </div>
            </div>',
);
