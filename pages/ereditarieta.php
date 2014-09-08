<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Ereditarietà',
    'subtitle'  => 'Costruire classi a partire da altre classi',
    'prev'      => array(
                        'url'   => 'classi_oggetti',
                        'label' => 'Classi - Riepilogo: creazione di un oggetto e utilizzo',
                    ),
    'next'      => array(
                        'url'   => 'ereditarieta_estendere',
                        'label' => 'Ereditarietà - Estendere una classe',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/language.oop5.inheritance.php',
                        'label' => 'Ereditarietà',
                    ),
    'content'   => '<p>A volte costruendo un\'applicazione si ha bisogno di oggetti simili tra loro,
che differiscono però solo per qualche proprietà o per qualche metodo.</p>
            <p>Costruire due classi diverse con alcuni metodi e proprietà uguali, però, non è una buona
soluzione. Le due classi finirebbero per avere vite evolutive separate e saremmo costretti a continui
<em>copia e incolla</em>, con il forte rischio (la certezza?) di sbagliare prima o poi.</p>
            <p>Per questo motivo, abbiamo degli strumenti per costruire delle classi
"a partire da altre classi", cioè delle classi che ereditano una parte dei metodi e delle
proprietà e ne ridefiniscono altri.</p>',
    'example'   => basename(__FILE__),
);
