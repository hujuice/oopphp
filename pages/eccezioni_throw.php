<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Eccezioni - Lanciare un\'eccezione',
    'subtitle'  => 'Affidare ad un\'eccezione i casi indesiderati',
    'prev'      => array(
                        'url'   => 'eccezioni_struttura',
                        'label' => 'Eccezioni - Struttura di un\'eccezione',
                    ),
    'next'      => array(
                        'url'   => 'eccezioni_catch',
                        'label' => 'Eccezioni - Catturare un\'eccezione',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/language.exceptions.php',
                        'label' => 'Eccezioni',
                    ),
    'content'   => '<p>Quando ci accorgiamo che le cose non stanno andando per il verso giusto, possiamo
<em>lanciare</em> un\'eccezione.</p>
            <p>Per lanciare un\'eccezione si usa il costrutto <code>throw</code>, che ammette come argomento
un oggetto della classe <code>Exception</code>.</p>
            <p>Generalmente l\'oggetto viene creato sul momento.</p>
            <p>Alla creazione dell\'eccezione possiamo (e dobbiamo!) definire un messaggio che informa
su quanto è accaduto e, se vogliamo, attribuire un codice numerico all\'eccezione.</p>
            <p>Il codice numerico è arbitrario e deve corrispondere ad una gestione delle
eccezioni basata sul codice. Questo è molto comodo, ad sempio, quando si lavora in architettura
REST.</p>
            <p>Non resta che scoprire come approfittarne.</p>',
    'example'   => basename(__FILE__),
);
