<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Eccezioni - Catturare un\'eccezione',
    'subtitle'  => 'Intercettare un\'eccezione e prendere una decisione',
    'prev'      => array(
                        'url'   => 'eccezioni_throw',
                        'label' => 'Eccezioni - Lanciare un\'eccezione',
                    ),
    'next'      => array(
                        'url'   => 'eccezioni_handler',
                        'label' => 'Eccezioni - Costruire un gestore di eccezioni',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/language.exceptions.php',
                        'label' => 'Eccezioni',
                    ),
    'content'   => '<p>Quando <strong>usiamo</strong> un oggetto che potrebbe lanciare un\'eccezione,
possiamo tentare di catturarla e prendere provvedimenti.</p>
            <p>Per farlo, dobbiamo racchiudere la parte di codice "a rischio" in un blocco
<code>try { ... } catch($e) { ... }</code>.</p>
            <p>Il codice relativo al blocco <code>try</code> viene eseguito regolarmente, ma
se al suo interno viene lanciata un\'eccezione, l\'esecuzione si arresta immediatamente e il
controllo passa al bloco <code>catch</code>, che può tentare di prendere provvedimenti.</p>
            <p>Un\'eccezione va effettivamente catturata se si ritiene di poter intervenire,
il che non è sempre possibile.</p>
            <p>Se l\'eccezione non viene catturata, invece, si propaga di oggetto in oggetto.
In altre parole, se un oggetto usa un altro oggetto e l\'oggetto interno lancia un\'eccezione
che non viene catturata, l\'oggetto esterno lancerà la stessa eccezione.</p>
            <p>In molti casi si lascia che l\'eccezione "salga" di oggetto in oggetto fino a che
non c\'è uno di essi che può provvedere.</p>
            <p class="alert alert-warning">Ogni applicazione non triviale deve prevedere
un sistema di gestione delle eccezioni.</p>
            <div class="panel panel-default">
              <div class="panel-heading">Esercizi</div>
              <div class="panel-body"><a href="esercizi/form">Raccogliere i dati inseriti in un modulo</div>
            </div>',
    'example'   => basename(__FILE__),
);
