<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Layout dei file',
    'subtitle'  => 'Organizzare il maeriale',
    'prev'      => array(
                        'url'   => 'bp_vcs',
                        'label' => 'Strumenti di collaborazione e versioning',
                    ),
    'next'      => array(
                        'url'   => 'risorse',
                        'label' => 'Framework, librerie, risorse in rete',
                    ),
    'content'   => '<p>Tutti gli scenari che abbiamo descritto sono abbastanza tipici.</p>
            <p>Allora è possibile immaginare un layout di applicazione generica,
che ci aiuta ad organizzare il materiale evitando confusioni.</p>
            <p>Un\'applicazione potrebbe avere un\'organizzazione come quella
mostrata qua al lato.</p>
            <p>Ovviamente è una proposta che ciascuno è libero di modificare secondo necessità.</p>',
    'side'      => basename(__FILE__),
);
