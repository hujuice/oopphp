<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Classi - Metodi e proprietà statici',
    'subtitle'  => 'Strumenti maneggevoli',
    'prev'      => array(
                        'url'   => 'eccezioni_handler',
                        'label' => 'Eccezioni - Costruire un gestore di eccezioni',
                    ),
    'next'      => array(
                        'url'   => 'classi_costanti',
                        'label' => 'Classi - Costanti',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/language.oop5.static.php',
                        'label' => 'Static',
                    ),
    'content'   => '<p>Esistono scenari in cui si vuole rendere disponibile un metodo o una proprietà di una classe
anche senza costruire nessuna istanza.</p>
            <p>Questo può accadere per delle proprietà descrittive, come un elenco o una configurazione,
o per dei metodi che eseguono algoritmi di validità piuttosto generale. Altre volte, vedremo, questa opportunità
ci permette di allestire dei "trucchetti" (pattern) che si rivelano molto utili.</p>
            <p>Un metodo o una proprietà possono essere resi disponibili senza bisogno dell\'istanza della
classe attraverso la parola chiave <code>static</code>.</p>
            <p>Ad essi si accede con l\'operatore <code>::</code> e NON con <code>-&gt;</code>.</p>
            <p>Esternamente si accede utilizzando direttamente il nome della classe.</p>
            <p>Internamente si accede utilizzando la parola chiave <code>self</code>.</p>
            <p class="alert alert-success">Poiché le classi non hanno uno <em>scope</em> e sono sempre disponibili,
metodi e proprietà statici hanno anche il vantaggio di essere accessibili da qualsiasi ambito, come se fossero
globali, ma rimandendo ben protetti all\'interno di una classe che li protegge dai conflitti.</p>
            <div class="panel panel-default">
              <div class="panel-heading">Esercizi</div>
              <div class="panel-body"><a href="esercizi/singleton">Singleton: garantire che una classe abbia una sola istanza</div>
            </div>',
    'example'   => basename(__FILE__),
);
