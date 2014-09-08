<?php
// Parametri per generare la pagina
return array(
    'title'     => 'PDOStatement - Assegnare i valori ai parametri',
    'subtitle'  => 'Parametri nominali e posizionali',
    'prev'      => array(
                        'url'   => 'pdo_query',
                        'label' => 'PDO - La scrittura delle query e la classe PDOStatement',
                    ),
    'next'      => array(
                        'url'   => 'pdo_execute',
                        'label' => 'PDOStatement - Eseguire una query',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/pdostatement.bindvalue.php',
                        'label' => 'PDOStatement::bindValue()',
                    ),
    'content'   => '<p>Per assegnare i valori ai parametri si può usare il metodo <code>->bindValue()</code>
della classe <code>PDOStatement</code>.</p>
            <p>Il primo argomento del metodo individua il parametro da manipolare.</p>
            <p>Se abbiamo usato parametri posizionali <code>?</code>, il primo parametro
è semplicemente un numero intero che indica l\'ordine del segnaposto: 1 per il primo,
2 per il secondo e via dicendo.</p>
            <p>Se abbiamo usato parametri nominali <code>:placeholder</code>, il primo paramentro
è il placeholder, così come è stato scritto (<code>:</code> compresi).</p>
            <p>Il secondo parametro è il valore da inserire al posto del segnaposto nella query
(e che PDOStatement provvederà a guarnire delle protezioni dall\'SQL injection).</p>
            <p>Il terzo parametro indica il tipo di dato, ma in un contesto diverso
da quello del PHP. È un tipo di dato che serve a PDOStatement per scrivere gli eventuali
apici e poco altro. Il tipo di dato viene indicato attraverso le <a href="http://it2.php.net/manual/en/pdo.constants.php">costanti
interne<code>PARAM_*</code> della classe <code>PDO</code></a>.</p>
            <p class="alert alert-danger">Sembra piuttosto noioso, anzi lo è.
La tentazione di concatenare direttamente le variabili nella query è piuttosto forte.<br>
Bene, <u>è proprio così che si verifica l\'SQL injection</u> <span class="fa fa-smile-o"></span></p>',
    'example'   => basename(__FILE__),
);
