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
     * Lettura del numero
     * @param string $name  Il nome della proprietà
     * @return integer      Il valore della proprietà
     * @throw Exception
     */
    public function __get($name)
    {
        if ('number' == $name) {
            return $this->_number;
        } else {
            throw new Exception('La proprietà ' . $name . ' non esiste.');
        }
    }

    /**
     * Scrittura del numero
     * @param string $name  Il nome della proprietà
     * @param mixed $value  Il valore della proprietà
     * @return mixed
     * @throw Exception
     */
    public function __set($name, $value)
    {
        if ('number' == $name) {

            if ($value) {
                $this->_number = (integer) $value;
                return $this->_number;
            } else {
                throw new Exception($name . ' non può valere zero!');
            }

        } else {
            throw new Exception('La proprietà ' . $name . ' non esiste.');
        }
    }
}

try {
    $object = new MyClass();
    echo $object->number, '<br>';
    $object->number = 3;
    echo $object->number, '<br>';
    $object->number = 0;
} catch (Exception $e) {
    echo $e->getMessage();
}
