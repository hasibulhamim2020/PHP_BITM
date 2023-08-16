<?php


namespace App\classes;


//use App\classes\controller\HomeController;

class Home // extends HomeController
{
    static $products = "hello";
    static public function test(){
        echo self::$products;
    }

//    function test(){
//        echo self::$products;
//    }


}