<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Pattern - Singleton',
    'subtitle'  => 'Imporre che una classe abbia una sola istanza',
    'prev'      => array(
                        'url'   => 'pattern',
                        'label' => 'Pattern di progettazione',
                    ),
    'next'      => array(
                        'url'   => 'pattern_factory',
                        'label' => 'Pattern - Factory',
                    ),
    'content'   => '<p>A volte si desidera che una classe abbia una sola istanza, cioè che
esista solo un oggetto di quella classe.</p>
            <p>Ad esempio se abbiamo una classe che descrive la richiesta HTTP e un\'altra
che ne descrive la risposta, non ha senso che si abbiano più istanze di quelle stesse classi:
in una comunicazione HTTP la richiesta è una sola e la risposta anche.</p>
            <p>In questi casi, la soluzione è il <em>pattern singleton</em>.</p>
            <p>consiste nello scrivere un <strong>costruttore privato e statico</strong> e affiancarlo
ad un metodo che si incarichi di costruire l\'oggetto internamente, una sola volta, e consegnarlo
a chi ne ha bisogno.</p>
            <p class="alert alert-warning">Il <em>singleton</em> è talmente elegante e seducente che
c\'è il rischio di abusarne. In alcuni articoli è stato chiamato <em>anti-pattern</em>, ad indicare
il fatto che l\'abuso potrebbe diventare una cattiva abitudine.</p>
            <p class="alert alert-success">Per il <em>pattern singleton</em> possiamo dare un esempio d\'uso concreto.</p>',
            'example'   => basename(__FILE__),
);
