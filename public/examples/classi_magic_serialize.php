<?php
/**
 * Una classe che punta ad un file
 */
class MyClass
{
    /**
     * Il puntatore ad un file
     * @var resource
     */
    protected $_fp;

    /**
     * Il percorso del file
     * @var string
     */
    protected $_path;

    /**
     * The file pointer position
     * @var integer
     */
    protected $_fpointer = 0;

    /**
     * Stabilisce il puntamento al file
     * @param string $path      Il percorso del file
     */
    public function __construct($path)
    {
        $this->_path = $path;
        $this->_fp = fopen($this->_path, 'r');
    }

    /**
     * Chiude il puntamento al file, conservando la posizione del puntatore
     */
    public function __sleep()
    {
        // Store the file pointer position
        $this->_fpointer = ftell($this->_fp);

        // Close
        fclose($this->_fp);

        // Dismiss
        $this->_fp = null;
    }

    /**
     * Ripristina il puntamento al file
     */
    public function __wakeup()
    {
        // Reopen
        $this->_fp = fopen($this->_path, 'r');

        // Move the pointer to the stored position
        fseek($this->_fp, $this->_fpointer);
    }
}
