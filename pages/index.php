<?php
// Parametri per generare la pagina
return array(
    'title'     => 'La programmazione a oggetti in PHP',
    'subtitle'  => 'Istat, 9, 10 e 11 settembre 2014',
    'content'   => '      <section>
        <h2>La programmazione a oggetti</h2>
        <ul>
          <li><a href="oop_concetti">Concetti generali</a>
            <ul>
              <li><a href="oop_modularita">Modularità</a></li>
              <li><a href="oop_riuso">Riuso</a></li>
              <li><a href="oop_collaborazione">Lavoro in team</a></li>
              <li><a href="oop_file">Organizzazione dei file</a></li>
              <li><a href="oop_framework">I framework</a></li>
              <li><a href="oop_progettazione">L\'importanza della progettazione</a></li>
            </ul>
          </li>
        </ul>
      </section>
      <section>
        <h2>Strumenti di lavoro</h2>
        <ul>
          <li><a href="classi">Classi di oggetti</a>
            <ul>
              <li><a href="classi_anatomia">Anatomia di una classe di oggetti</a></li>
              <li><a href="classi_costruttore">Costruttore (e distruttore)</a></li>
              <li><a href="classi_oggetti">Riepilogo: creazione di un oggetto e utilizzo</a></li>
            </ul>
          </li>
          <li><a href="ereditarieta">Ereditarietà</a>
            <ul>
              <li><a href="ereditarieta_estendere">Estendere una classe</a></li>
              <li><a href="ereditarieta_sintassi">Sintassi e utilizzo</a></li>
              <li><a href="ereditarieta_visibilita">Visibilità</a></li>
              <li><a href="ereditarieta_abstract">Metodi e classi astratti</a></li>
              <li><a href="ereditarieta_final">Metodi e proprietà "finali"</a></li>
              <li><a href="ereditarieta_interfacce">Interfacce</a></li>
            </ul>
          </li>
          <li><a href="eccezioni">Eccezioni</a>
            <ul>
              <li><a href="eccezioni_struttura">Struttura di un\'eccezone</a></li>
              <li><a href="eccezioni_throw">Lanciare un\'eccezione</a></li>
              <li><a href="eccezioni_catch">Catturare un\'eccezione</a></li>
              <li><a href="eccezioni_handler">Costruire un gestore di eccezioni</a></li>
            </ul>
          </li>
          <li><a href="classi_static">Metodi e proprietà statici</a></li>
          <li><a href="classi_costanti">Costanti</a></li>
          <li><a href="classi_clone">Clonare gli oggetti</a></li>
          <li><a href="classi_magic">Magic methods</a>
            <ul>
              <li><a href="classi_magic_construct">Costruttore e distruttore (li abbiamo già visti)</a></li>
              <li><a href="classi_magic_properties">Usare proprietà che non esistono (o non sono disponibili)</a></li>
              <li><a href="classi_magic_methods">Invocare metodi che non esistono (o che non sono disponibili)</a></li>
              <li><a href="classi_magic_serialize">Mettere a nanna un oggetto</a></li>
            </ul>
          </li>
          <li><a href="namespace">Namespace</a>
            <ul>
              <li><a href="namespace_concetti">Concetti generali</a></li>
              <li><a href="namespace_uso">Usare i namespace</a></li>
              <li><a href="namespace_autoloading">Autoloading!</a></li>
            </ul>
          </li>
        </ul>
      </section>
      <section>
        <h2>Design pattern</h2>
        <ul>
          <li><a href="pattern">Pattern di progettazione</a>
            <ul>
              <li><a href="pattern_singleton">Singleton</a></li>
              <li><a href="pattern_factory">Factory</a></li>
              <li><a href="pattern_mvc">MVC</a></li>
            </ul>
          </li>
        </ul>
      </section>
      <section>
        <h2>I database</h2>
        <ul>
          <li><a href="database">Il mondo reale: i database</a>
            <ul>
              <li><a href="database_prodotti">Estensioni specifiche per prodotto</a></li>
              <li><a href="database_astrazione">Astrazione</a></li>
              <li><a href="database_sqlinjection">SQL injection</a></li>
              <li><a href="database_pdo">PDO</a>
                <ul>
                  <li><a href="pdo_pdo">La classe PDO</a></li>
                  <li><a href="pdo_query">La scrittura delle query e la classe PDOStatement</a></li>
                  <li><a href="pdo_params">Assegnare i valori ai parametri</a></li>
                  <li><a href="pdo_execute">Eseguire una query</a></li>
                  <li><a href="pdo_results">Raccogliere i risultati</a></li>
                  <li><a href="pdo_altro">Altre opportunità</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </section>
      <section>
        <h2>Il mestiere dello sviluppatore</h2>
        <ul>
          <li><a href="best_pratices">Buone pratiche di organizzazione di un\'applicazione</a>
            <ul>
              <li><a href="bp_configurazione">Configurazione</a></li>
              <li><a href="bp_vcs">Strumenti di collaborazione e versioning</a></li>
              <li><a href="bp_files">Layout dei file</a></li>
            </ul>
          </li>
          <li><a href="risorse">Framework, librerie, risorse in rete</a>
            <ul>
              <li><a href="framework">I framework</a></li>
              <li><a href="shared_repos">I repository pubblici</a></li>
              <li><a href="community">La comunità degli sviluppatori</a></li>
            </ul>
          </li>
        </ul>
      </section>
      <section>
        <h3>Esercitazioni</h3>
        <ul>
          <li><a href="esercizi/doppio">Un esercizio di aritmetica: sempre il doppio</a></li>
          <li><a href="esercizi/divide">Un altro esercizio di aritmetica: sempre a dividere</a></li>
          <li><a href="esercizi/miniapp">Una mini applicazione completa</a></li>
          <li><a href="esercizi/extends">Estendere un\'intera applicazione</a></li>
          <li><a href="esercizi/form">Raccogliere i dati inseriti in un modulo</a></li>
          <li><a href="esercizi/exception">Dotare un\'applicazione di un exception handler</a></li>
          <li><a href="esercizi/singleton">Singleton: garantire che una classe abbia una sola istanza</a></li>
          <li><a href="esercizi/database">Registrazione di un utente in database</a></li>
        </ul>
      </section>',
);
