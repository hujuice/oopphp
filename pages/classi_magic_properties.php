<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Usare proprietà che non esistono (o non sono disponibili)',
    'subtitle'  => 'Metodi invocati quando si tenta di accedere a proprietà non accessibili',
    'prev'      => array(
                        'url'   => 'classi_magic_construct',
                        'label' => 'Costruttore e distruttore (li abbiamo già visti)',
                    ),
    'next'      => array(
                        'url'   => 'classi_magic_methods',
                        'label' => 'Invocare metodi che non esistono (o che non sono disponibili)',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/language.oop5.magic.php',
                        'label' => 'Magic methods',
                    ),
    'content'   => '<p>Normalmente, quando si tenta di accedere a delle proprietà non pubbliche di un oggetto
o a delle proprietà che non esistono, viene innescato un <em>fatal error</em>. In effetti non si può.</p>
            <p>Prima di annunciare l\'errore, però, l\'interprete del PHP verifica se nella classe esistono
i metodi <code>__get()</code> e <code>__set()</code>, rispettivamente per il caso che si sia tentata una
lettura o una scrittura della proprietà.</p>
            <p>In questo modo si può consentire un uso comodo e immediato delle proprietà della classe,
senza rinunciare alla loro protezione.</p>',
    'example'   => basename(__FILE__),
);
