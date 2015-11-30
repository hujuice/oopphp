<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Ereditarietà - Metodi e classi finali',
    'subtitle'  => 'Impedire l\'estensione',
    'prev'      => array(
                        'url'   => 'ereditarieta_abstract',
                        'label' => 'Ereditarietà - Metodi e classi astratti',
                    ),
    'next'      => array(
                        'url'   => 'ereditarieta_interfacce',
                        'label' => 'Ereditarietà - Interfacce',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/language.oop5.final.php',
                        'label' => 'Final',
                    ),
    'content'   => '<p>L\'estensione potrebbe essere non gradita.</p>
            <p>Singoli metodi o intere classi possono essere descritti con il prefisso
<code>final</code>, che ne impedirà la sovrascrittura.</p>',
    'example'   => basename(__FILE__),
);
