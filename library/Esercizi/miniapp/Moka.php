<?php
/**
 * Questa classe gestisce la moka
 * La mia moka è miracolosa: si prepara da sola e versa anche il caffè nella tazza
 */
class Moka
{
    /**
     * Preparazione
     * @param string $miscela   La miscela prescelta
     */
    public function prepare($miscela)
    {
        /*
        Preparazione del caffè, con la miscela indicata
        */
    }

    /**
     * Servizio
     */
    public function give()
    {
        $cup = new Cup();
        $cup->pour(25); // 25 ml

        return $cup;
    }
}