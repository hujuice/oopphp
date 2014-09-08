<?php
// Una clase che gestisce i colori dello schermo
class screenColors
{
    public static $RGB = array('Red', 'Green', 'Blue');

    public static function perc2byte($perc)
    {
        return round($perc / 100 * 255);
    }

    public function firstColor()
    {
        return self::$RGB[0];
    }

    // Other properties and methods
}

echo screenColors::perc2byte(73), '<br>';

$sc = new screenColors;
echo $sc->firstColor();
