<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Namespace',
    'subtitle'  => 'Isolare i nomi delle classi',
    'prev'      => array(
                        'url'   => 'classi_magic_serialize',
                        'label' => 'Mettere a nanna un oggetto',
                    ),
    'next'      => array(
                        'url'   => 'namespace_concetti',
                        'label' => 'Namespace - Concetti generali',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/language.namespaces.php',
                        'label' => 'Namespace',
                    ),
    'content'   => '<div class="jumbotron">
              <h1>Namespace</h1>
              <div class="row">
                <div class="col-md-4"><img src="img/namespaces.png" alt="Namespaces"></div>
                <div class="col-md-8">
                  <p>I nomi delle classi sono globali. Questo potrebbe costituire un problema, perché in un\'applicazione
di dimensioni non modeste si corre il rischio che due classi abbiano lo stesso nome.</p>
                  <p>Il PHP perciò supporta i <em>namespace</em>, una serie di prefissi ai nomi delle classi
che le raggruppano in categorie.</p>
                  <p>Possiamo pensare ai namespace come alle directory che raggruppano i file.</p>
                  <p>Scopriremo che hanno anche un altro uso, risparmiandoci un sacco di lavoro.</p>
                </div>
              </div>
            </div>',
);
