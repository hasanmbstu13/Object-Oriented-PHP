<?php
include "FruitStatic.php";

$myApples = 1;
$myOranges = 2;
$myBananas = 3;

$rtnVal = FruitStatic::addFruit($myApples, $myOranges, $myBananas);

print "You have $rtnVal pieces of fruit";