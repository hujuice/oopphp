<?php
// Parametri per generare la pagina
return array(
    'title'     => 'PDO - La scrittura delle query e la classe PDOStatement',
    'subtitle'  => 'Gestire una query',
    'prev'      => array(
                        'url'   => 'pdo_pdo',
                        'label' => 'PDO - La classe PDO',
                    ),
    'next'      => array(
                        'url'   => 'pdo_params',
                        'label' => 'PDO - Assegnare i valori ai parametri',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/class.pdostatement.php',
                        'label' => 'PDOStatement',
                    ),
    'content'   => '<p>Per evitare i rischi di SQL injection, le query devono essere scritte senza valori.
Al posto dei valori si usano dei <em>segnaposto</em> al posto dei quali assegneremo dei valori
successivamente.</p>
            <p>I segnaposto possono essere o degli anonimi <code>?</code>, che verranno poi
manipolati in base alla loro posizione nella query, oppure degli espliciti <code>:placeholder</code>,
che verranno manipolati in base al nome.</p>
            <p>Una volta scritta la query in questo modo, la si affida al metodo <code>-&gt;prepare()</code>
dell\'oggetto <code>PDO</code>, che restituisce un altro oggetto, questa volta della classe <code>PDOStatement</code>,
che si incaricherà di tutta la fase di esecuzione. <code>PDOStatement</code> inserirà i valori nelle query
secondo le istruzioni, eseguirà le query e tratterà l\'eventuale output.</p>
            <p>In quella sede, viene anche indicato sommariamente il tipo di paramentro, attraverso le costanti
interne della classe <code>PDO</code>.</p>
            <p>Nel manuale del PHP è disponibile <a href="http://it2.php.net/manual/en/pdo.constants.php">l\'elenco
dei tipi trattati da <code>PDO</code></a>.</p>
            <p class="alert alert-warning">Se la preparazione di una query fallisce, per default <code>-&gt;prepare()</code> restituisce <code>false</code>.</p>',
    'example'   => basename(__FILE__),
);
