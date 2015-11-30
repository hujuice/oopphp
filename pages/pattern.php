<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Pattern di progettazione',
    'subtitle'  => 'Soluzioni',
    'prev'      => array(
                        'url'   => 'namespace_autoloading',
                        'label' => 'Namespace - Autoloading!',
                    ),
    'next'      => array(
                        'url'   => 'pattern_singleton',
                        'label' => 'Pattern - Singleton',
                    ),
    'content'   => '<div class="jumbotron">
              <h1>Design pattern</h1>
              <div class="row">
                <div class="col-md-4"><img src="img/strategy.png" alt="Strategy"></div>
                <div class="col-md-8">
                  <p>Un <em>pattern di progettazione</em> è un problema ricorrente per il quale
sia stata individuata una soluzione generale e soddisfacente.</p>
                  <p>Si tratta di un concetto astratto, di un suggerimento discorsivo, di una
proposta di <strong>strategia</strong>.</p>
                  <p>Solo per i pattern più semplici, infatti, troveremo esempi di codice,
mentre i pattern più potenti sono soprattutto formulazioni, la cui implementazione
dipende dagli obiettivi.</p>
                </div>
              </div>
            </div>',
);
