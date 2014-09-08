<?php
// Parametri per generare la pagina
return array(
    'title'     => 'La comunità degli sviluppatori',
    'subtitle'  => 'Turisti "fai da te"',
    'prev'      => array(
                        'url'   => 'shared_repos',
                        'label' => 'Repository condivisi',
                    ),
    'next'      => array(
                        'url'   => 'not_found',
                        'label' => 'Not found',
                    ),
    'content'   => '<p>La rete è ricchissima di siti tematici, blog, forum e comunità di molti generi.</p>
            <p>Se anche, ovviamente, non sono il luogo adatto ad ospitare librerie complete,
sono spesso una preziosa risorsa di informazioni, approfondimenti, esempi di codice e best pratices.</p>
            <p>Altrettanto ovviamente, tutto quello che si legge deve essere considerato con cautela,
facendolo seguire a più attente letture del manuale o a prove da eseguire noi stessi.</p>
            <p>La comunità degli sviluppatori, però, è molto seria e scrupolosa e - ad eccezione di qualche
ingenuità sempre possibile - le conoscenze e le risorse offerte dai nostri colleghi di tutto il mondo
sono una ricchezza di cui approfittare e, perché no? a cui contribuire.</p>
            <p>Questo stesso corso domani potrebbe essere pubblicato in rete, sottoposto
alle severe critiche della comunità, revisionato e corretto di conseguenza e diventare, con un po\'
di lavoro, una delle tante risorse attraverso cui gli sviluppatori si aiutano a vicenda.</p>
            <p class="alert alert-info">Avventurarsi per la rete è un po\' come essere "turisti fai da te":
si corre qualche rischio, in genere di portata modesta, ma è anche il modo per avventurarsi in territori
nuovi e sconosciuti.</p>',
    'side'      => basename(__FILE__),
);
