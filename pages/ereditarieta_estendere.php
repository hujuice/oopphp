<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Ereditarietà - Estendere una classe',
    'subtitle'  => 'Aggiungiamo o sostituiamo metodi e proprietà',
    'prev'      => array(
                        'url'   => 'ereditarieta',
                        'label' => 'Ereditarietà',
                    ),
    'next'      => array(
                        'url'   => 'ereditarieta_sintassi',
                        'label' => 'Ereditarietà - Sintassi e utilizzo',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/language.oop5.inheritance.php',
                        'label' => 'Ereditarietà',
                    ),
    'content'   => '<p>Quando una classe eredita la sua definizione da un\'altra classe, si dice
che la <em>estende</em>.</p>
            <p>L\'estensione può consistere in due cose:</p>
            <ul>
              <li>la sovrascrittura dei metodi o delle proprietà;</li>
              <li>l\'aggiunta di nuovi metodi o proprietà.</li>
            </ul>
            <p class="alert alert-success">L\'estensione delle classi è uno strumento molto potente, è di semplice comprensione
e consente una buona organizzazione del codice.</p>',
    'example'   => basename(__FILE__),
);
