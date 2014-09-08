<?php
/**
 * Questa classe gestisce la tazzina
 */
class Cup
{
    /**
     * Quantità di caffè presente
     * @var float
     */
    protected $_ml = 0;

    /**
     * Riempimento
     * @param float $ml     Millilitri di liquido
     */
    public function pour($ml)
    {
        $this->_ml = $ml;
    }

    /**
     * Svuotamento
     * @return string   Un segno di gradimento
     */
    public function drink()
    {
        $this->_ml = 0;

        return 'Ahhh';
    }
}