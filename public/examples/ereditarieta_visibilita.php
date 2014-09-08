<?php
/**
 * Una classe semplicissima
 */
class baseClass
{
    public function myPublic()
    {
        echo 'base::public<br>';
    }

    protected function _myProtected()
    {
        echo 'base::protected<br>';
    }

    private function _myPrivate()
    {
        echo 'base::private<br>';
    }

    public function test()
    {
        $this->myPublic();
        $this->_myProtected();
        $this->_myPrivate();
    }
}

/**
 * Un'altra classe semplicissima
 */
class childClass extends baseClass
{
    public function myPublic()
    {
        echo 'child::public<br>';
    }

    protected function _myProtected()
    {
        echo 'child::protected<br>';
    }

    private function _myPrivate()
    {
        echo 'child::private<br>';
    }

    public function anotherTest()
    {
        $this->myPublic();
        $this->_myProtected();
        $this->_myPrivate();

        parent::myPublic();
        parent::_myProtected();
        //parent::_myPrivate(); // <----------- Fatal error!
    }
}

$child = new childClass();

$child->test();
echo '<br>';
$child->anotherTest();
