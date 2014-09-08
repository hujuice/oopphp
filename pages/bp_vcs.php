<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Strumenti di collaborazione e versioning',
    'subtitle'  => 'Lavorare con gli altri, lavorare in luoghi diversi, lavorare su idee diverse, versioni',
    'prev'      => array(
                        'url'   => 'bp_configurazione',
                        'label' => 'Configurazione',
                    ),
    'next'      => array(
                        'url'   => 'bp_files',
                        'label' => 'Layout dei file',
                    ),
    'content'   => '<p>Uno strumento di lavoro potentissimo sono i sistemi di controllo
della versione, o <em>version control system</em> o brevemente <a href="http://it.wikipedia.org/wiki/Controllo_versione">VCS</a>.</p>
            <p>Si chiamano così perché sono nati per gestire la successione delle versioni
ma consentono molto di più:</p>
            <ul>
              <li>dividere il lavoro tra persone e <em>unire</em> il lavoro senza sofferenze</li>
              <li>dividersi tra vari luoghi (casa, ufficio, laptop) e <em>unire</em> il lavoro senza sofferenze</li>
              <li>diramare l\'applicazione in più rami, scegliendo alla fine quale usare o <em>unendoli</em></li>
              <li>attribuire un numero di versione o dei commenti ad ogni stato dell\'applicazione, in ogni ramo,
in ogni luogo, da parte di ogni sviluppatore</li>
              <li>tutto questo insieme</li>
            </ul>
            <p class="alert alert-success">I sistemi di VCS sono tanti e non è detto che siano semplici da utilizzare.
Chi inizia a farne uso, però, non riesce più a farne a meno!</p>',
    'side'      => basename(__FILE__),
);
