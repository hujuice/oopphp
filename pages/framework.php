<?php
// Parametri per generare la pagina
return array(
    'title'     => 'I framework',
    'subtitle'  => 'Hotel di lusso, costosi',
    'prev'      => array(
                        'url'   => 'risorse',
                        'label' => 'Framework, librerie, risorse in rete',
                    ),
    'next'      => array(
                        'url'   => 'shared_repos',
                        'label' => 'I repository condivisi',
                    ),
    'content'   => '<p>I framework sono complesse infrastrutture, spesso poderose, che organizzano e modellano
intere applicazioni, oltre a fornire attrezzature per numerosissimi scopi.</p>
            <p>Offrono le implementazioni dei pattern principali e sono generalmente orientati
ad una grande completezza, precisione e affidabilità.</p>
            <p>Non ci si illuda, però, che i framework possano sollevarci dalla conoscenza del PHP.
Anzi, il primo strumento necessario per comprendere come usare un framework è la consocenza approfondita
del linguaggio e dei pattern.</p>
            <p class="alert alert-info">I framework sono come hotel lussuosi, che offrono tutto ad un prezzo costoso.
Il costo, al solito, è lo <strong>studio</strong>.</p>',
    'side'      => basename(__FILE__),
);
