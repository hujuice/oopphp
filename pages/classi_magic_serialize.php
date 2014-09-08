<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Mettere a nanna un oggetto',
    'subtitle'  => 'Salvare un oggetto per usi successivi',
    'prev'      => array(
                        'url'   => 'classi_magic_methods',
                        'label' => 'Invocare metodi che non esistono (o che non sono disponibili)',
                    ),
    'next'      => array(
                        'url'   => 'namespace',
                        'label' => 'Namespace',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/language.oop5.magic.php',
                        'label' => 'Magic methods',
                    ),
    'content'   => '<p>In PHP quasi tutti i tipi di dato possono essere <em>serializzati</em>, cioè convertiti in una stringa
che può essere, ad esempio, salvata in un file. Per questo esiste la funzione <code><a href="http://it2.php.net/manual/en/function.serialize.php">serialize()</a></code>. La sua reciproca, <code><a href="http://it2.php.net/manual/en/function.unserialize.php">unserialize()</a></code>, ripristina il dato in una variabile.</p>
            <p>Unica eccezione sono le <em>risorse</em>, cioè i riferimenti a risorse esterne come file, connessioni
di rete, eccetera.</p>
            <p>Anche gli oggetti possono essere serializzati, ma se una delle proprietà dell\'oggetto è una risorsa, se ne perderà
il legame con la risorsa concreta.</p>
            <p>Altri due <em>magic method</em> ci vengono in soccorso per questo. Si tratta di <code>__sleep()</code>
e <code>__wakeup()</code>, che vengono invocati quando un oggetto viene serializzato o ripristinato.</p>
            <p>Attraverso queste due funzioni si può chiudere e poi ripristinare il funzionamento delle risorse.</p>',
    'example'   => basename(__FILE__),
);
