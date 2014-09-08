<?php
// Parametri per generare la pagina
return array(
    'title'     => 'Ereditarietà - Visibilità',
    'subtitle'  => 'Un po\' di privacy',
    'prev'      => array(
                        'url'   => 'ereditarieta_sintassi',
                        'label' => 'Ereditarietà - Sintassi e utilizzo',
                    ),
    'next'      => array(
                        'url'   => 'ereditarieta_abstract',
                        'label' => 'Ereditarietà - Metodi e classi astratte',
                    ),
    'manual'    => array(
                        'url'   => 'http://it2.php.net/manual/en/language.oop5.visibility.php',
                        'label' => 'Visibilità',
                    ),
    'content'   => '<p>L\'autore di una classe può aver bisogno di proprietà e metodi interni e non volere che siano
resi disponibili alle sue istanze o alle classi che la estendono.</p>
            <p>In altre parole si può desiderare che una proprietà o un metodo della classe non siano disponibili se non
all\'interno della classe stessa.</p>
            <p>A questo scopo un metodo o una proprietà possono essere definiti anteponendo una apposita parola chiave:
<code>protected</code>.</p>
            <p>In casi ancora più rigidi, si può desiderare che una classe, al suo interno, non risenta delle estensioni
nemmeno quando viene estesa.</p>
            <p>A questo scopo esiste un\'altra parola chiave: <code>private</code>.</p>
            <p>Metodi e proprietà privati possono essere ridefiniti dalle estensioni, ma non
possono essere utilizzati.</p>
            <p>Riepilogo:</p>
            <dl class="dl-horizontal">
              <dt><code>public</code></dt>
              <dd>il metodo o la proprietà è disponibile a tutti</dd>
              <dt><code>protected</code></dt>
              <dd>il metodo o la proprietà è disponibile alle classi estese, ma non alle instanze della classe</dd>
              <dt><code>private</code></dt>
              <dd>il metodo o la proprietà è disponibile solo alla classe stessa, nemmeno all\'estensione che può, al massimo, ridefinirlo/a</dd>
            </dl>
            <div class="panel panel-default">
              <div class="panel-heading">Consuetudini</div>
              <div class="panel-body">
                <ul>
                  <li>Si usa chiamare metodi e proprietà non pubblici con nomi che iniziano con <code>_</code>
(<em>underscore</em>).</li>
                  <li>L\'uso di <code>private</code> è abbastanza raro, quello di <code>protected</code>
è abbastanza frequente ed è una buona abitudine.</li>
                  <li>Si tende a proteggere sempre le <strong>proprietà</strong> (ad esempio con <code>protected</code>)
e ad affidare a dei metodi la loro manipolazione "dall\'esterno", per evitare che assumano valori imprevisti.</li>
                  <li>Si tende a proteggere sempre i <strong>metodi</strong> che non si vuole esplicitamente che siano pubblici.
In altre parole, nel dubbio ci si protegge, per evitare invocazioni non previste.</li>
                </ul>
              </div>
            </div>',
    'example'   => basename(__FILE__),
);
