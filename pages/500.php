<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Ouch! - È successo qualcosa di irreparabile',
    'subtitle'  => 'errore 500',
    'content'   => '<div class="jumbotron">
  <p>Accidenti, si è verificato un errore talmente grave che il sistema non sa rispondere.</p>
  <div class="text-center">
    <img src="' . \OopPhp\Controller\Front::getInstance()->baseUrl() . '/img/fatal_error.png" alt="Fatal error funny image" class="text-center" style="width: 100%; height: auto">
  </div>
</div>',
);
