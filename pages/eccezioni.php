<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Eccezioni',
    'subtitle'  => 'Non guastiamo tutto con gli errori',
    'prev'      => array(
                        'url'   => 'ereditarieta_interfacce',
                        'label' => 'Ereditarietà - Interfacce',
                    ),
    'next'      => array(
                        'url'   => 'eccezioni_struttura',
                        'label' => 'Eccezioni - Struttura',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/language.exceptions.php',
                        'label' => 'Eccezioni',
                    ),
    'content'   => '<div class="jumbotron">
              <h1>Eccezioni</h1>
              <div class="row">
                <div class="col-md-4"><img src="img/broken.png" alt="Broken"></div>
                <div class="col-md-8">
                  <p>Normalmente, cerchiamo di prevenire situazioni indesiderate verificando con un <code>if</code>
che le condizioni siano adeguate. Ma cosa fare se non lo sono?</p>
                  <p>Quando si programma a oggetti non ci si può accontentare di emettere un mesaggio di errore,
magari con qualche <em>header</em>. Occorre anche garantire che l\'architettura a oggetti della nostra applicazione
non si "rompa" e magari avere anche gli strumenti per intervenire all\'interno della nostra gerarchia di classi.</p>
                  <p>Le <em><strong>eccezioni</strong></em> sono lo strumento che fa per noi.</p>
                </div>
              </div>
            </div>',
);
