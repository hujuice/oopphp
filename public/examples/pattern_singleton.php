<?php
class oneInstanceClass
{
    private static $_instance; // Private static!
    protected $_count = 0;

    private function __construct() // Private static!
    {
        // Do nothing
    }

    public static function getInstance()
    {
        if (!isset(self::$_instance)) {
            $className = __CLASS__;
            self::$_instance = new $className;
        }
        return self::$_instance;
    }

    public function increment()
    {
        $this->_count++;
        return $this->_count;
    }
}

// Questo darebbe errore
//$obj = new oneInstanceClass;

$firstObj = oneInstanceClass::getInstance();
echo $firstObj->increment(), '<br>';

$secondObj = oneInstanceClass::getInstance();
echo $secondObj->increment(), '<br>';
