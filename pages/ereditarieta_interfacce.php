<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Ereditarietà - Interfacce',
    'subtitle'  => 'Design di classi senza codice',
    'prev'      => array(
                        'url'   => 'ereditarieta_final',
                        'label' => 'Ereditarietà - Metodi e classi finali',
                    ),
    'next'      => array(
                        'url'   => 'eccezioni',
                        'label' => 'Eccezioni',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/language.oop5.interfaces.php',
                        'label' => 'Interfacce',
                    ),
    'content'   => '<p>Le <strong>interfacce</strong> sono un livello di astrazione ancora
più elevato di quello delle estensioni.</p>
            <p>In uno scenario particolarmente complesso, in cui le varie fasi di sviluppo
si svolgono in contesti molto separati, può essere utile uno strumento che imponga
ad una classe di avere certe caratteristiche.</p>
            <p>Possiamo pensare ad un\'interfaccia come ad un <em>template</em> di classe.</p>
            <p>Si può richiedere che altre classi <em>implementino</em> quell\'interfaccia.</p>
            <p class="alert alert-success">Una classe può implementare più di un\'interfaccia.</p>',
    'example'   => basename(__FILE__),
);
