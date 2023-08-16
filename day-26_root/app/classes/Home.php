<?php


namespace App\classes;


use App\classes\controller\HomeController;

class Home
{
    static protected $products = "Hello";
    static public function test(){
        echo self::$products;
    }

}