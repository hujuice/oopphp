<?php
// Parametri per generare la pagina
return array(
    'title'     => 'PDOStatement - Eseguire una query',
    'subtitle'  => 'Finalmente l\'esecuzione',
    'prev'      => array(
                        'url'   => 'pdo_params',
                        'label' => 'PDOStatement - Assegnare i valori ai parametri',
                    ),
    'next'      => array(
                        'url'   => 'pdo_results',
                        'label' => 'PDOStatement - Raccogliere i risultati',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/pdostatement.execute.php',
                        'label' => 'PDOStatement::execute()',
                    ),
    'content'   => '<p>Questa volta è velocissimo: si usa il metodo <code>->execute()</code> e via!</p>
            <p class="alert alert-danger">Se l\'esecuzione della query fallisce viene sollevata
un\'<strong>eccezione</strong>.</p>',
    'example'   => basename(__FILE__),
);
