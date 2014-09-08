<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Classi - Costanti',
    'subtitle'  => 'Costanti interne',
    'prev'      => array(
                        'url'   => 'classi_static',
                        'label' => 'Classi - Metodi e proprietà statici',
                    ),
    'next'      => array(
                        'url'   => 'classi_clone',
                        'label' => 'Clonare gli oggetti',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/language.oop5.constants.php',
                        'label' => 'Costanti',
                    ),
    'content'   => '<p>Oltre alle proprietà, all\'interno delle classi è possibile definire delle costanti,
che hanno esattamente la funzione delle costanti ordinarie all\'interno della classe,
ma il cui <em>scope</em> è confinato alla classe stessa. A meno che...</p>
            <p>In altre parole, alle costanti non si può accedere dall\'esterno in modo tradizionale,
ma ad esse si può accedere attraverso <code>::</code> (come per metodi e proprietà statici).</p>',
    'example'   => basename(__FILE__),
);
