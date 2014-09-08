<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Pattern - Factory',
    'subtitle'  => 'Imporre che una classe abbia una sola istanza',
    'prev'      => array(
                        'url'   => 'pattern_singleton',
                        'label' => 'Pattern - Singleton',
                    ),
    'next'      => array(
                        'url'   => 'pattern_mvc',
                        'label' => 'Pattern - MVC',
                    ),
    'content'   => '<p>A volte si desidera che chi ha bisogno di un\'istanza di un oggetto
abbia a disposizione uno strumento intermedio, che prenda delle decisioni sull\'oggetto necessaio,
compia delle azioni preliminari e solo alla fine consegni l\'oggetto.</p>
            <p>In questo caso si usa il <em>factory pattern</em>, che consiste nell\'affidare
al metodo di una classe la creazione dell\'oggetto.</p>
            <p>Ad esempio potremmo avere un file di configurazione che stabilisce se
il nostro output debba essere in XHTML o in HTML5, ma vogliamo che chi si occupa
della generazione dei contenuti non abbia da preoccuparsene.</p>
            <p>Per l\'output, allora, invece potrà essere utilizzato il <em>factory pattern</em>,
che restituisce un oggetto capace di gestire l\'output, scelto in base alla configurazione.</p>
            <p class="alert alert-success">Per il <em>pattern factory</em> possiamo dare un esempio d\'uso concreto.</p>',
            'example'   => basename(__FILE__),
);
