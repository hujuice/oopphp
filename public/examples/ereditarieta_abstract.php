<?php
/**
 * Una classe astratta
 */
abstract class AbstractClass
{
    // Force Extending class to define this method
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    // Common method
    public function printOut()
    {
        echo $this->getValue(), '<br>';
    }
}

/**
 * L'estensione della classe
 */
class ConcreteClass extends AbstractClass
{
    protected function getValue()
    {
        return "ConcreteClass";
    }

    public function prefixValue($prefix)
    {
        return "{$prefix}ConcreteClass";
    }
}

$class = new ConcreteClass;
$class->printOut();
echo $class->prefixValue('FOO_'), '<br>';
