<?php
// Parametri per generare la pagina
return array(
    'title'     => 'OOP - Organizzazione dei file',
    'subtitle'  => 'Parti separate',
    'prev'      => array(
                        'url'   => 'oop_collaborazione',
                        'label' => 'OOP - Lavoro in team',
                    ),
    'next'      => array(
                        'url'   => 'oop_framework',
                        'label' => 'OOP - I framework',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/oop5.intro.php',
                        'label' => 'Classi ed oggetti',
                    ),
    'content'   => '<div class="jumbotron">
              <h1>Organizzare il materiale</h1>
              <div class="row">
                <p class="col-md-4"><img src="img/files.png" alt="File"></p>
                <div class="col-md-8">
                  <p>Anche un progetto di modeste dimensioni verrà certamente distribuito in più file.</p>
                  <p>Come orgranizzare la distribuzione del materiale?</p>
                  <p>E come organizzare l\'inclusione dei file uno nell\'altro?</p>
                  <p>La programmazione ad oggetti ci offre ottimi strumenti anche per questo,
suggerendoci semplicemente di utilizzare un file per ogni modulo (anche a vantaggio del riuso!)
e fornendoci le attrezzature per l\'inclusione automatica dei file necessari.</p>
                </div>
              </div>
            </div>',
);
