<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Clonare gli oggetti',
    'subtitle'  => 'Le variabili contenenti oggetti sono dei puntatori',
    'prev'      => array(
                        'url'   => 'classi_costanti',
                        'label' => 'Classi - Costanti',
                    ),
    'next'      => array(
                        'url'   => 'classi_magic',
                        'label' => 'Magic methods',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/language.oop5.cloning.php',
                        'label' => 'Clonazione',
                    ),
    'content'   => '<p>La copia di un oggetto - cioè assegnare ad una variabile il valore di un\'altra
che rappresenta un oggetto - non produce i risultati più prevedibili.</p>
            <p>Questo avviene perché il costrutto <code>new</code> non restituisce un vero e proprio
valore (l\'oggetto), ma piuttosto un <em>riferimento</em> all\'oggetto.</p>
            <p>Una copia normale, perciò, produce un nuovo riferimento allo stesso oggetto. Poiché
gli oggetti possono essere di grandi dimensioni e richiedere un uso sostanzioso della RAM, questo
comportamento è apparso il più appropriato.</p>
            <p>Se però si vuole produrre una copia vera e propria dell\'oggetto, con tutte le proprietà
impostate allo stesso modo dell\'oggetto di origine ma fisicamente separato, si può usare il costrutto
<code>clone</code>.</p>',
    'example'   => basename(__FILE__),
);
