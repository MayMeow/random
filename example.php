<?php
require_once "vendor/autoload.php";

use AsunaY\MyRandom;
use AsunaY\XorShift;

$seed = 53;

$min = 1;
$max = 100;

$xs = new XorShift(time());

for ($i = 1; $i <= 10; $i++) {
    echo $xs->getRand($min, $max) . "\n";
}

