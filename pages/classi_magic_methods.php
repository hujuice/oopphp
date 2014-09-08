<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Invocare metodi che non esistono (o che non sono disponibili)',
    'subtitle'  => 'Metodi invocati quando si tenta di invocare metodi non accessibili',
    'prev'      => array(
                        'url'   => 'classi_magic_properties',
                        'label' => 'Usare proprietà che non esistono (o non sono disponibili)',
                    ),
    'next'      => array(
                        'url'   => 'classi_magic_serialize',
                        'label' => 'Mettere a nanna un oggetto',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/language.oop5.magic.php',
                        'label' => 'Magic methods',
                    ),
    'content'   => '<p>Normalmente, quando si tenta di accedere a dei metodi non pubblici di un oggetto
o a dei metodi che non esistono, viene innescato un <em>fatal error</em>. In effetti non si può.</p>
            <p>Prima di annunciare l\'errore, però, l\'interprete del PHP verifica se nella classe esiste
il metodo <code>__call()</code>.</p>
            <p>In questo modo si può consentire un uso comodo e immediato di metodi della classe,
senza rinunciare alla loro protezione.</p>',
    'example'   => basename(__FILE__),
);
