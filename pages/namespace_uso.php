<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Namespace - Usare i namespace',
    'subtitle'  => '<em>percorsi</em> relativi e assoluti',
    'prev'      => array(
                        'url'   => 'namespace_concetti',
                        'label' => 'Namespace - Concetti generali',
                    ),
    'next'      => array(
                        'url'   => 'namespace_autoloading',
                        'label' => 'Namespace - Autoloading!',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/language.namespaces.php',
                        'label' => 'Namespace',
                    ),
    'content'   => '<p>La logica seguita per i namespace è esattamente quella con cui, in un filesystem,
i file si ritengono collocati in delle directory.</p>
            <p>Si prendano queste tre frasi:</p>
            <ul>
              <li>Se un <span class="pink">file</span> vuole far riferimento ad un altro <span class="pink">file</span>
nella stessa <span class="pink">directory</span>, non dovrà indicare un <em>percorso</em>.</li>
              <li>Se un <span class="pink">file</span> vuole far riferimento ad un altro <span class="pink">file</span>
in una sotto<span class="pink">directory</span>, dovrà indicare un percorso <em>relativo</em>, cioè un percorso
che si intenda "a partire da dove sono io".</li>
              <li>Se un <span class="pink">file</span> vuole far riferimento ad un altro <span class="pink">file</span>
in un altra collocazione, dovrà indicare un percorso <em>completo</em>, a partire dalla radice.</li>
            </ul>
            <p>Se in queste tre frasi alla parola directory sostituiamo la parola namespace
e alla parola file la parola classe (o interfaccia o funzione o costante), abbiamo ottenuto
altrettante verità.</p>
            <ul>
              <li>Se una <span class="green">classe</span> vuole far riferimento ad un\'altra <span class="green">classe</span>
nello stesso <span class="green">namespace</span>,
non dovrà indicare un <em>percorso</em>.</li>
              <li>Se una <span class="green">classe</span> vuole far riferimento ad un\'altra <span class="green">classe</span>
in un <span class="green">namespace</span> interno, dovrà indicare un percorso <em>relativo</em>, cioè un percorso che si intenda
"a partire da dove sono io".</li>
              <li>Se una <span class="green">classe</span> vuole far riferimento ad un\'altra <span class="green">classe</span>
in un altra collocazione, dovrà indicare un percorso <em>completo</em>, a partire dalla radice.</li>
            </ul>
            <p>La radice, nei namespace, è il namespace <code>\</code>.</p>',
    'example'   => basename(__FILE__),
    'warning'   => 'Anche le classi native del PHP sono coinvolte dai
namespace. Quando ci si trova all\'interno di un namespace, le classi native del PHP devono
essere invocate anteponendo <code>\</code>.',
);
