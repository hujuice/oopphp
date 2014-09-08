<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Eccezioni - Struttura di un\'eccezione',
    'subtitle'  => 'Una classe per manipolare gli errori',
    'prev'      => array(
                        'url'   => 'eccezioni',
                        'label' => 'Eccezioni',
                    ),
    'next'      => array(
                        'url'   => 'eccezioni_throw',
                        'label' => 'Eccezioni - Lanciare un\'eccezione',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/class.exception.php',
                        'label' => 'Classe Exception',
                    ),
    'content'   => '<p>Un\'<em>eccezione</em> è - guarda un po\' <span class="fa fa-smile-o"></span> - un oggetto della classe nativa del PHP <code>Exception</code>.</p>
            <p>Agli oggetti della classe <code>Exception</code> possiamo affidare la gestione degli imprevisti.</p>
            <div><img src="img/exception.png" alt="Exception"></div>
            <p>Basta un\'occhiata per capire quante informazioni gestisce. Non resta che imparare ad usarlo.</p>',
);
