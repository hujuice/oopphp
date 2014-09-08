<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Classi - Anatomia di una classe di oggetti',
    'subtitle'  => 'Un contenitore per una funzionalità',
    'prev'      => array(
                        'url'   => 'classi',
                        'label' => 'Classi di oggetti',
                    ),
    'next'      => array(
                        'url'   => 'classi_costruttore',
                        'label' => 'Classi - Costruttore (e distruttore)',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/language.oop5.basic.php',
                        'label' => 'Classi ed oggetti - Le basi',
                    ),
    'content'   => '<p class="alert alert-info">Una classe di oggetti è un contenitore di funzioni e di variabili.</p>
            <p>Nel linguaggio OOP, le variabili di una classe prendono il nome di <em><strong>proprietà</strong></em>
e le funzioni prendono il nome di <em><strong>metodi</strong></em>.</p>
            <p>Una classe è definita dal costrutto <code>class nomeClasse { ... }</code> che racchiude la lista
di proprietà (variabili) e metodi (funzioni).</p>
            <p>Le classi non vengono utilizzate direttamente, ma servono a creare <em><strong>oggetti</strong></em>
di quella classe. Ciascun oggetto è titolare del valore delle proprie proprietà e dunque possiede
uno stato interno diverso da quello di altri oggetti della stessa classe. Anche i metodi, perciò,
hanno effetti diversi per ciascun oggetto.</p>
            <p>Si può pensare agli oggetti di una classe come degli array ancora più articolati,
visto che oltre a dei valori, contengono anche delle funzioni.</p>
            <p>Per creare un oggetto di una classe, chiamato anche <em>istanza</em> della classe,
si usa il costrutto <code>new</code>, seguito dal nome della classe.</p>
            <p>Metodi e proprietà sono accessibili scrivendo il nome della variabile seguito da <code>-></code>
e poi il nome del metodo o della proprietà.</p>
            <p>All\'interno della classe, la variabile <code>$this</code> indica l\'istanza della classe,
cioè l\'oggetto di quella classe, ed è la "maniglia" attraverso la quale si può accedere a metodi e proprietà
della classe, all\'interno della classe stessa.</p>
            <div class="panel panel-default">
              <div class="panel-heading">Esercizi</div>
              <div class="panel-body">
                Un esercizio di aritmetica: <a href="esercizi/doppio">sempre il doppio</a><br>
                Un altro esercizio di aritmetica: <a href="esercizi/divide">sempre a dividere</a><br>
              </div>
            </div>',
    'example'   => basename(__FILE__),
);
