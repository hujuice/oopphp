<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Classi - Riepilogo: creazione di un oggetto e utilizzo',
    'subtitle'  => 'Creare e usare l\'istanza di una classe',
    'prev'      => array(
                        'url'   => 'classi_costruttore',
                        'label' => 'Classi - Costruttore (e distruttore)',
                    ),
    'next'      => array(
                        'url'   => 'ereditarieta',
                        'label' => 'Ereditarietà',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/language.oop5.basic.php',
                        'label' => 'Le basi',
                    ),
    'content'   => '<p>Il costrutto <code>new</code> genera una nuova istanza di una classe. Se necessario,
durante la creazione dell\'oggetto vengono inviati al costruttore i parametri richiesti. L\'istanza
della classe viene normalmente assegnata ad una variabile.</p>
            <p>A partire da questo momento è possibile accedere ai metodi e alle proprietà
<strong>pubblici</strong> dell\'oggetto attraverso il costrutto <code>-></code>.</p>
            <p>Metodi e proprietà non pubblici, invece, non sono accessibili alla variabile e hanno
un\'utilità squisitamente interna.</p>
            <p>Ai metodi e alle proprietà di una classe, internamente, si accede tramite la
<em>pseudo variabile</em> <code>$this</code>.</p>
            <div class="panel panel-default">
              <div class="panel-heading">Esercizi</div>
              <div class="panel-body"><a href="esercizi/miniapp">Una mini applicazione completa</a></div>
            </div>',
    'example'   => basename(__FILE__),
);
