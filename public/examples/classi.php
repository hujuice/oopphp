<?PHP
/**
 * Classe che gestisce le informazioni di un profilo utente
 * conservate in un file
 */
class profileManager
{
    /**
     * Variabile che conserva il profilo
     * @var array
     */
    protected $_profile = array(
        'name'  => null,
        'email' => null,
    );

    /**
     * Variabile che conserva il percorso del file
     * @var string
     */
    protected $_path = null;

    /**
     * Avvia l'oggetto, informandolo del percorso del file
     * dove sono conservate le informazioni del profilo
     *
     * @param string $filePath   Il percorso del file dove conservare il profilo
     * @return void
     */
    public function read($filePath)
    {
        $this->_path = $filePath;

        if (file_exists($filePath)) {
            $this->_profile = parse_ini_file($this->_path);
        }
    }

    /**
     * Salva i dati
     * @return void
     */
    protected function _save()
    {
        $fp = fopen($this->_path, 'w');

        foreach ($this->_profile as $key => $value) {
            fwrite($fp, $key . ' = "' . $value . '"' . PHP_EOL);
        }

        fclose($fp);
    }

    /**
     * Legge e scrive il nome completo
     * @param string $name  Il nome completo
     * @return string       Il nome completo
     */
    public function name($name = null)
    {
        if ($name) {
            $this->_profile['name'] = $name;

            $this->_save();
        }

        return $this->_profile['name'];
    }

    /**
     * Legge e scrive l'indirizzo email
     * @param string $email L'indirizzo email
     * @return string       L'indirizzo email
     */
    public function email($email = null)
    {
        if ($email) {
            // Controlliamo il formato
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->_profile['email'] = $email;

                $this->_save();
            }
        }

        return $this->_profile['email'];
    }
}

// Creo un oggetto della classe che gestisce
// le informazioni del profilo di un utente,
// conservandole in un file
$user = new profileManager;

// Leggo i dati esistenti, utilizzando la funzione read
$user->read('/tmp/ludovica');

// Imposto dei valori (stato interno), utilizzando le funzioni read e email
$user->name('Ludovica La Grande');
$user->email('ludovica@example.com');

// Leggo i valori, utilizzando le funzioni della classe
echo '"', $user->name(), '" &lt;', $user->email(), '&gt;<br>';
