<?php
/**
 * Created by PhpStorm.
 * User: Mainul Hasan
 * Date: 9/25/14
 * Time: 4:36 PM
 */

class HelloWorldOOPStatic {

    public static function displayValue()
    {
        $myMsg = "Hello World - OOP Static";
        print $myMsg."<br/>";
    }

}

HelloWorldOOPStatic::displayValue();
HelloWorldOOPStatic::displayValue();
HelloWorldOOPStatic::displayValue();