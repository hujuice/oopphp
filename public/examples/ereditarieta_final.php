<?php
/**
 * Una classe astratta
 */
abstract class AbstractClass
{
    protected $_message;
    protected $_data;

    // Force Extending class to define this method
    abstract public function setMessage($message);
    abstract public function setData($data);

    // Common method
    final protected function _getStructure()
    {
        $structure = array('message' => null, 'data' => null);

        if ($this->_message) {
            $structure['message'] = $this->_message;
        }
        if ($this->_data) {
            $structure['data'] = $this->_data;
        }

        if ($structure) {
            return $structure;
        }
    }

    public function deploy()
    {
        return json_encode(array('message' => $this->_message, 'data' => $this->_data));
    }
}

/**
 * L'estensione della classe
 */
class ConcreteClass extends AbstractClass
{
    public function setMessage($message)
    {
        $this->_message = $message;
    }

    public function setData($data)
    {
        $this->_data = $data;
    }
}

$class = new ConcreteClass;
$class->setMessage('Table caption');
$class->setData(array(array('Ludovica', 'Bianchi'), array('Mario', 'Rossi')));
echo $class->deploy();
