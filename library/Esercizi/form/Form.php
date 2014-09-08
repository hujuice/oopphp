<?php
/**
 * Saluta
 */
class Form
{
    /**
     * Il nome
     * @var string
     */
    protected $_name;

    /**
     * Acquisisce le variabili GET
     * @param array $get    Una copia di $_GET
     */
    public function __construct($get)
    {
        if (array_key_exists('nome', $get)) {
            $this->_name = $get['nome'];
        }
    }

    /**
     * Un metodo che saluta
     */
    public function saluta()
    {
        if ($this->_name) {
            return 'Ciao ' . $this->_name;
        } else {
            throw new Exception('Ma non dovevi darmi un nome?');
        }
    }
}