<p><u>Due esempi di SQL injection</u></p>
            <p>L'utente ha inserito il suo username in un modulo e abbiamo ricevuto quel
nome tramite form. Potremmo essere tentati di scrivere la query seguente:</p>
<pre>'SELECT email FROM users WHERE username = ' . $_POST['name']</pre>
            <p>Ma cosa succde se l'utente inserisce nel campo nome la stringa seguente?</p>
<pre>(DELETE FROM users)</pre>
            <p>Succede che l'utente, semplicemente compilando un modulo, ha cancellato il contenuto
della nostra tabella.</p>
            <p>Decidiamo di proteggerci con gli apici inversi:</p>
<pre>'SELECT email FROM users WHERE username =  `' . $_POST['name'] . '`'</pre>
            <p>L'utente può ancora scrivere, nel campo username:</p>
<pre>my_user_name`; DELETE FROM users; SELECT * FROM users WHERE username = `pippo</pre>
            <p>E così ci ha fregato di nouvo.</p>
