<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Namespace - Autoloading!',
    'subtitle'  => 'Isolare i nomi delle classi',
    'prev'      => array(
                        'url'   => 'namespace_uso',
                        'label' => 'Namespace - Usare i namespace',
                    ),
    'next'      => array(
                        'url'   => 'pattern',
                        'label' => 'Pattern di programmazione',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/language.namespaces.php',
                        'label' => 'Namespace',
                    ),
    'content' => '<p>I namespace risolvono definitivamente la seccatura di includere
volta per volta i file contenenti una classe.</p>
            <p>In PHP esiste una funzione, <code>spl_autoload_register()</code> che indica
quale funzione deve essere invocata ogni volta che si ha bisogno di una classe che non è ancora
stata definita in nessuno dei file già inclusi.</p>
            <p>La funzione che esegue il caricamento automatico può essere costruita in modo
arbitrario, ma occorre osservare che ammette come argomento il nome della classe che si vuole utilizzare,
<strong>completo di namespace</strong>.</p>
            <p>In questo modo, sarà sufficiente organizzare i file
esattamente come sono organizzati i namespace per scrivere una funzione di <em>autolaoding</em>
davvero elementare.</p>',
            'example'   => basename(__FILE__),
    'files'     => array(
                        'classes/database/data.php',
                        'classes/file/data.php',
                    ),
);
