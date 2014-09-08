<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Pattern MVC',
    'subtitle'  => 'Organizzare un\'applicazione',
    'prev'      => array(
                        'url'   => 'pattern_factory',
                        'label' => 'Pattern - Factory',
                    ),
    'next'      => array(
                        'url'   => 'database',
                        'label' => 'I database',
                    ),
    'content'   => '<p>Il <strong><em>pattern MVC</em></strong> non è un\'elegante trovata stilistica
da adottare nel codice, ma un approccio concettuale all\'organizzazione di un\'applicazione.</p>
            <p>L\'acronimo sta per <em><strong>M</strong>odel, <strong>V</strong>iew, <strong>C</strong>ontroller</em>
e l\'idea è quella di organizzare l\'applicazione in queste tre aree fondamentali.</p>
            <p>Per <strong>Model</strong> si intende quella famiglia di classi che si incarica
delle infrastrutture interne per i dati: database, webservice, file. Quali che siano
le infrastrutture interna dei dati, le classi che se ne incaricano fanno parte
del <strong>Model</strong>.</p>
            <p>Per <strong>View</strong> si intende quella famiglia di classi che si incarica dell\'output
finale. Una volta individuata la struttura di dati da restituire nella risposta, la <strong>View</strong>
provvederà alla sua presentazione.</p>
            <p>Il <strong>Controller</strong> è quello che si incarica della logica generale
dell\'applicazione. Analizza le caratteristiche della richiesta, interagisce col <em>Model</em>
come necessario, organizza la risposta e infine invoca la <em>View</em> per formare l\'output.</p>',
    'side'      => basename(__FILE__),
    'success'   => '<em>MVC</em> è uno dei più importanti design pattern, forse il più importante
per un\'applicazione web. Arrivare a disegnare le proprie applicazioni secondo <em>MVC</em> è sengo di maturità dello sviluppatore
e di qualità delle applicazioni. Chi riesce a progettare in termini di <em>MVC</em> scriverà applicazioni molto rapidamente, perché
sa già cosa deve fare prima ancora di aver ricevuto i requisiti.<br>
Dall\'altro lato, occorre imparare a progettare applicazioni <em>MVC</em> e bisogna concedere a se stessi
un tempo di maturazione.',
);
