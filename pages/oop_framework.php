<?php
// Parametri per generare la pagina
return array(
    'title'     => 'OOP - I framework',
    'subtitle'  => 'Parti separate',
    'prev'      => array(
                        'url'   => 'oop_file',
                        'label' => 'OOP - File',
                    ),
    'next'      => array(
                        'url'   => 'oop_progettazione',
                        'label' => 'OOP - L\'importanza della progettazione',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/oop5.intro.php',
                        'label' => 'Classi ed oggetti',
                    ),
    'content'   => '<div class="jumbotron">
              <h1>I framework</h1>
              <div class="row">
                <div class="col-md-8">
                  <p>I framework sono collezioni di classi di oggetti, cioè di funzionalità, cioè di
soluzioni a problemi tipici, cioè di <em>pattern</em>.</p>
                  <p>Spesso si tratta di raccolte di grande complessità, con oggetti che fanno uso
ciascuno degli altri e che prevedono una discreta preparazione preliminare.</p>
                  <p>Dall\'altro lato, i framework offrono un catalogo di soluzioni vastissimo
che rende la programmazione molto diversa da quella tradizionale.</p>
                  <p class="alert alert-info">Usare i framework vuol dire trascorrere molto tempo
a studiare per scrivere pochissimo codice.</p>
                </div>
                <div class="col-md-4"><img src="img/framework.png" alt="Framework" width="320" height="320"></div>
              </div>
            </div>',
);
