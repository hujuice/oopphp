<?php
/**
 * Una classe semplicissima
 */
class SimpleClass
{
    public $var;
}

$a = new simpleClass;
$a->var = 0;

$b = $a;
$b->var = 1;

echo $a->var, '<br>';

$b = clone $a;
$b->var = 0;

echo $a->var, '<br>';
