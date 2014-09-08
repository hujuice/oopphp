<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Classi - Costruttore (e distruttore)',
    'subtitle'  => 'Rendere più efficiente la creazione (e la distruzione) di un oggetto',
    'prev'      => array(
                        'url'   => 'classi_anatomia',
                        'label' => 'Classi - Anatomia di una classe di oggetti',
                    ),
    'next'      => array(
                        'url'   => 'classi_oggetti',
                        'label' => 'Classi - Riepilogo: creazione di un oggetto e utilizzo',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/language.oop5.decon.php',
                        'label' => 'Classi ed oggetti - Costruttore e distruttore',
                    ),
    'content'   => '<p>Il costruttore è una funzione che viene eseguita al momento della creazione dell\'oggetto.</p>
            <p>Se il costruttore ha bisogno di parametri, questi vengono scritti come argomento dell\'operazione
di creazione.</p>
            <p>Il costruttore non restituisce nulla (o è più esatto dire che non c\'è modo di raccogliere
ciò che restituisce). Vedremo più avanti come gestire eventuali fallimenti.</p>
            <p>Analogo al costruttore, è il distruttore, che viene invocato quando l\'oggetto cessa di esistere
o quando l\'esecuzione finisce.</p>
            <p>Poiché il distruttore non viene mai invocato esplicitamente, non ammette argomenti.</p>
            <p>Il distruttore va utilizzato con cautela e ad esso non devono essere affidate operazioni
critiche. Il distruttore, infatti, non viene invocato se il programma si interrompe in modo anomalo
(ad esempio per un errore fatale).</p>',
    'example'   => basename(__FILE__),
);
