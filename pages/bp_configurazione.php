<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Configurazione',
    'subtitle'  => 'Separare le informazioni di installazione',
    'prev'      => array(
                        'url'   => 'best_pratices',
                        'label' => 'Buone pratiche di organizzazione di un\'applicazione',
                    ),
    'next'      => array(
                        'url'   => 'bp_vcs',
                        'label' => 'Strumenti di collaborazione e versioning',
                    ),
    'content'   => '<p>Quasi sempre le applicazioni hanno bisogno di informazioni che dipendono
dal contesto in cui vengono eseguite. Ad esempio:</p>
            <ul>
              <li>Il DSN di un database</li>
              <li>Le credenziali di accesso ad un database</li>
              <li>Il percorso di alcuni file che potrebbero essere necessari all\'applicazione</li>
              <li>Gli <em>URL</em> di alcune risorse di rete necessarie all\'applicazione</li>
              <li>La <em>timezone</em> del nostro sistema di date e ore</li>
              <li>Alcuni parametri di configurazione del PHP</li>
              <li>Altro</li>
            </ul>
            <p>È bene raccogliere tutte queste informazioni in un unico file (generalmente un file <code>.ini</code>),
ben commentato, che può essere modificato anche da chi non conosce la struttura dell\'applicazione.</p>
            <p>In questo modo l\'applicazione può essere installata in vari contesti con due passaggi semplici:</p>
            <ol>
              <li>Copia dei file</li>
              <li>Modifica del file di configurazione secondo necessità</li>
            </ol>',
    'side'      => basename(__FILE__),
    'success'   => 'Se abbiamo lavorato bene, possiamo anche affidare ad altri la nostra
applicazione o pubblicarla su <a href="https://github.com/">GitHub</a>.',
);
