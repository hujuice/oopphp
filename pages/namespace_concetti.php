<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Namespace - Concetti generali',
    'subtitle'  => 'Isolare i nomi delle classi',
    'prev'      => array(
                        'url'   => 'namespace',
                        'label' => 'Namespace',
                    ),
    'next'      => array(
                        'url'   => 'namespace_uso',
                        'label' => 'Namespace - Usare i namespace',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/language.namespaces.php',
                        'label' => 'Namespace',
                    ),
    'content'   => '<p>Un <em>namespace</em> è un prefisso che viene definito <strong>all\'inizio di un file</strong>
e che formerà un prefisso per tutti i nomi <u>definiti in quel file</u> di:</p>
            <ul>
              <li>Classi</li>
              <li>Interfacce</li>
              <li>Funzioni</li>
              <li>Costanti</li>
            </ul>
            <p>I namespace possono essere inseriti uno nell\'altro, un po\' come in una
directory è possibile creare un\'altra directory. Così, si può avere <code>namespace1\namespace2\namespace3</code>.</p>',
    'example'   => basename(__FILE__),
    'files'     => array(
                        'examples/classes/database/data.php',
                        'examples/classes/file/data.php',
                    ),
/*
*/
);
