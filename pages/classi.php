<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Classi di oggetti',
    'subtitle'  => 'Creazione e uso di una classe di oggetti',
    'prev'      => array(
                        'url'   => 'oop_progettazione',
                        'label' => 'OOP - La progettazione',
                    ),
    'next'      => array(
                        'url'   => 'classi_anatomia',
                        'label' => 'Classi - Anatomia di una classe di oggetti',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/oop5.intro.php',
                        'label' => 'Classi ed oggetti',
                    ),
    'content'   => '<p>Una <strong>classe</strong> di oggetti si incarica completamente di una <em>funzionalità</em>.</p>
            <p>È molto più di una funzione. È in grado di svolgere più compiti e descrive uno stato interno.</p>
            <p>Questo vuol dire che contiene una <em>collezione</em> di funzioni
e anche una collezione di variabili che ne definiscono lo stato.</p>
            <p>Una classe di oggetti, insomma, ci "sbroglia" tutto un aspetto di un problema.</p>
            <p class="alert alert-success">Le classi saranno i nostri moduli, le nostre <em>parti separate</em>.</p>
            <p>Proprio perché una classe possiede uno stato, avremo bisogno di <strong>oggetti</strong>
concreti, che appartengono a quella classe e che potremo assegnare a delle variabili, ciascuno con il proprio
stato interno e con il proprio ciclo di vita.</p>
            <p>Una classe, quindi, è una struttura astratta, articolata a piacere e attiva (cioè capace di un funzionamento),
che finisce per rappresentare un <em>tipo di dato</em> a cui potrà fare riferimento una variabile.</p>
            <p>Gli oggetti della classe sono delle variabili del tipo definito dalla classe.</p>
            <p class="alert alert-warning">La classe presentata in questa pagina serve solo a illustrare le idee
generali. Inizieremo a studiarne i dettagli a partire dalla prossima pagina.</p>',
    'example'   => basename(__FILE__),
);
