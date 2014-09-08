<?php
/**
 * Questa classe racconta del cane
 */
class Dog
{
    /**
     * Questa funzione porta fuori il cane
     */
    public function getOut()
    {
        $woof = 0;
        while($woof < 3) {
            echo 'woof ';
            $woof++;
        }
    }
}