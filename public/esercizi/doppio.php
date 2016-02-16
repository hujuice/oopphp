<?php
// Esercizio: un numero che raddoppia sempre
header('Content-Type: text/plain');
ini_set('display_errors', true); // MAI in produzione!!!
ini_set('html_errors', 0);

/**
 * Questa classe rappresenta un numero
 * che raddoppia continuamente il suo valore.
 */
class doppio
{
    /**
     * Il valore corrente
     * @var integer
     */
    public $val = 1;

    /**
     * Raddoppia il valore corrente e restituisce il risultato
     * @return integer
     */
    public function mult()
    {
        $this->val = $this->val * 2;
        return $this->val;
    }
}

$numeroCheRaddoppia = new doppio;
echo $numeroCheRaddoppia->mult(), PHP_EOL;
echo $numeroCheRaddoppia->mult(), PHP_EOL;
echo 'meglio fare un ciclo', PHP_EOL;

while ($numeroCheRaddoppia->val < 1e8) {
    echo $numeroCheRaddoppia->mult(), PHP_EOL;
}
