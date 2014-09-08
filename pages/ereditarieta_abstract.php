<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Ereditarietà - Metodi e classi astratte',
    'subtitle'  => 'Mezze classi, mezzi metodi',
    'prev'      => array(
                        'url'   => 'ereditarieta_visibilita',
                        'label' => 'Ereditarietà - Visibilità',
                    ),
    'next'      => array(
                        'url'   => 'ereditarieta_final',
                        'label' => 'Ereditarietà - Metodi e classi finali',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/language.oop5.abstract.php',
                        'label' => 'Astrazione',
                    ),
    'content'   => '<p>Lo strumento delle estensioni è così potente che si possono scrivere classi
pensate soltanto per essere estese. Verranno chiamate <em>classi astratte</em> e conterranno
dei <em>metodi astratti</em>.</p>
            <p>Un metodo astratto è un metodo di cui viene definita solamente la <em>signature</em>,
cioè il nome e l\'elenco delle variabili che dovrà accettare. Non viene definita, invece, la logica
interna, cioè il codice.</p>
            <p>Una classe astratta DEVE essere estesa e non può essere usata direttamente. L\'estensione
DEVE provvedere a scrivere il codice dei metodi astratti, rispettando la signature.</p>
            <p>I metodi concreti devono avere la stessa visibilità di quelli astratti, o superiore.</p>
            <p class="alert alert-success">Le classi astratte servono a definire <em>famiglie</em> di classi,
tutte con lo stesso corredo di metodi, alcuni in comune tra di loro, altri caratterizzati dalla stessa <em>signature</em>
ma con logiche diverse.</p>',
    'example'   => basename(__FILE__),
);
