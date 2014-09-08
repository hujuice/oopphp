<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Eccezioni - Costruire un gestore di eccezioni',
    'subtitle'  => 'Affidiamo le eccezioni a qualcuno e non pensiamoci più',
    'prev'      => array(
                        'url'   => 'eccezioni_catch',
                        'label' => 'Eccezioni - Catturare un\'eccezione',
                    ),
    'next'      => array(
                        'url'   => 'classi_static',
                        'label' => 'Metodi e proprietà statici',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/function.set-exception-handler.php',
                        'label' => 'Exception handler',
                    ),
    'content'   => '<p>Un metodo elegante e poco faticoso per gestire le eccezioni è usare un
<em>exception handler</em>.</p>
            <p>Un <em>exception handler</em> è una funzione (un metodo di una classe!) che si incarica
di gestire i casi eccezionali.</p>
            <p>In altre parole l\'<em>exception handler</em> è una funzione che ammette come
unico argomento un oggetto della classe <code>Excpetion</code>, che cattura tutte le eccezioni
e che scriviamo liberamente per gestire la situazione.</p>
            <p>Per definire un <em>exception handler</em> si usa la funzione
<code>set_exception_handler</code>.</p>
            <p>Dopo l\'invocazione dell\'<em>exception handler</em> l\'esecuzione si arresta,
ma l\'<em>exception handler</em> può invocare nuovi oggetti e rilanciare l\'applicazione.</p>
            <div class="panel panel-default">
              <div class="panel-heading">Esercizi</div>
              <div class="panel-body"><a href="esercizi/exception">Dotare un\'applicazione di un <em>exception handler</em></a></div>
            </div>',
    'example'   => basename(__FILE__),
);
