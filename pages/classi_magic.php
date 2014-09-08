<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Magic methods',
    'subtitle'  => 'Metodi che si invocano da soli',
    'prev'      => array(
                        'url'   => 'classi_clone',
                        'label' => 'Clonare gli oggetti',
                    ),
    'next'      => array(
                        'url'   => 'classi_magic_construct',
                        'label' => 'Costruttore e distruttore (li abbiamo già visti)',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/language.oop5.magic.php',
                        'label' => 'Magic methods',
                    ),
    'content'   => '<div class="jumbotron">
              <h1>Un po\' di magia</h1>
              <div class="row">
                <p class="col-md-4"><img src="img/magic.png" alt="Magic"></p>
                <div class="col-md-8">
                  <p>La costruzione di classi in PHP è resa molto più potente e flessibile da una collezione
di metodi che, se adeguatamente preparati, vengono invocati in certi momenti particolari.</p>
                  <p>Possiamo scrivere metodi che vengono invocati alla creazione e alla distruzione dell\'oggetto
(li abbiamo già visti), quando si tenta di accedere a metodi e proprietà inaccessibili, quando si tenta di
usare un oggetto come se fosse una funzione, quando un oggetto viene clonato, e anche altro.</p>
                  <p>Vediamo i principali.</p>
                </div>
              </div>
            </div>',
);
