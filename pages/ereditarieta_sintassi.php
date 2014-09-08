<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Ereditarietà - Sintassi e utilizzo',
    'subtitle'  => 'Strumenti di lavoro',
    'prev'      => array(
                        'url'   => 'ereditarieta_estendere',
                        'label' => 'Ereditarietà - Estendere una classe',
                    ),
    'next'      => array(
                        'url'   => 'ereditarieta_visibilita',
                        'label' => 'Ereditarietà - Visibilità',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/language.oop5.inheritance.php',
                        'label' => 'Ereditarietà',
                    ),
    'content'   => '<p>Per indicare che una classe estende un\'altra classe, al momento della sua definizione
si usa il costrutto <code>extends</code> seguito dal nome della classe genitrice.</p>
            <p>All\'interno della classe <em>figlia</em> si può ancora accedere
alle proprietà della classe <em>genitrice</em> attraverso la parola chiave <code>parent</code>
seguita dall\'operatore <code>::</code> (che si chiamerebbe <em>Paamayim Nekudotayim</em>, ma...).</p>
            <p>Una classe può anche estendere un\'altra classe che a sua volta è già estensione di una terza.
Non c\'è limite.</p>
            <p>Alcuni trucchi del mestiere:</p>
            <ul>
              <li>Una classe può bloccare un metodo della classe parent semplicemente sovrascrivendolo
con qualcosa che non fa nulla o emette un messaggio di errore.</li>
              <li>Molto spesso i metodi intendono arricchire i metodi parent, non proprio sovrascriverli.
A questo scopo, è sufficiente invocare <code>parent::method()</code> all\'interno di <code>method()</code>.</li>
            </ul>
            <div class="panel panel-default">
              <div class="panel-heading">Esercizi</div>
              <div class="panel-body"><a href="esercizi/extends">Estendere un\'intera applicazione</a></div>
            </div>',
    'example'   => basename(__FILE__),
);
