<?php
/**
 * Una classe qualsiasi
 */
class MyClass
{
    /**
     * Un numero che non deve mai essere zero
     * @var integer
     */
    protected $_number = 1;

    /**
     * Risponde a certe chiamate
     * @param string $name      Il nome del metodo invocato
     * @param array $args       Gli argomenti passati
     * @return mixed
     * @throw Exception
     */
    public function __call($name, $args)
    {
        switch($name) {

            case 'getNumber':
                return $this->_number;

            case 'setNumber':
                if (isset($args[0])) {
                    $this->_number = $args[0];
                } else {
                    throw new Exception('Il metodo setNumber ha bisogno di un argomento.');
                }
                return;

            default:
                throw new Exception('Il metodo ' . $name . ' non esiste.');

        }
    }
}

try {
    $object = new MyClass();
    echo $object->getNumber(), '<br>';
    $object->setNumber(3);
    echo $object->getNumber(), '<br>';
} catch (Exception $e) {
    echo $e->getMessage();
}
