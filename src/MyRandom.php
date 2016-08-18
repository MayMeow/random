<?php

namespace AsunaY;

class MyRandom {
    private static $tree = 0;

    public static function plantSeed($seed)
    {
        self::$tree = abs(intval($seed)) % 9999999+1;
        self::getRand();
    }

    public static function getRand($min = 0, $max = 9999999)
    {
        self::$tree = (self::$tree * 125) % 2796203;
        return self::$tree % ($max - $min + 1) + $min;
    }
}