<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Qui non c\'è nulla',
    'subtitle'  => 'errore 404',
    'content'   => '<div class="jumbotron">
  <p>A questo indirizzo non corrisponde nessun contenuto.</p>
  <div class="text-center">
    <img src="' . \OopPhp\Controller\Front::getInstance()->baseUrl() . '/img/not_found.png" alt="Fatal error funny image" class="text-center" style="max-width: 100%; height: auto">
  </div>
</div>',
);
