<?php
include "FruitStatic.php";

$myApples = 1;
$myOranges = 2;
$myBananas = 3;

$rtnVal = FruitStatic::addFruit($myApples, $myOranges, $myBananas); //for static method and variable we never need to instantiate a class
																	//we directly access the variable and method using :: or scope resolution operator

print "You have $rtnVal pieces of fruit";