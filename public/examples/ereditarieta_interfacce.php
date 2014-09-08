<?php
/**
 * Un'interfaccia
 */
interface template
{
    public function setMessage($message);
    public function setData($data);
}

class output implements template
{
    protected $_message;
    protected $_data;

    public function setMessage($message)
    {
        $this->_message = $message;
    }

    public function setData($data)
    {
        $this->_data = $data;
    }
}

$out = new output();
if ($out instanceof template) {
    $out->setMessage('Ciao');
} else {
    // Errore!
}
