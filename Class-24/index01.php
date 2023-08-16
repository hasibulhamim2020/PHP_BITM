<?php

class Animal  //parent class for cat & man
{
//    protected $habit = "timely take sleep.";
//
//    protected function activity()
////    private function activity()
//    {
//        echo $this->habit;
//    }
    public function walk(){
        echo "can walk";

    }
    public function eat(){
        echo "can eat";

    }
    public function sleep(){
        echo "can sleep";

    }
}
//$obj = new Animal();
//$obj -> activity();
//echo  $obj->habit = "don't know";


class Cat extends Animal //child class of animal
{
//  function test(){
//      $this -> activity();
//  }
    public function meaw(){
        echo "can meaw";
    }
}
//(new Cat())->test();

abstract class Dog
{
    abstract  function ghewGhew();
}

class Man extends Dog //child class of animal
{
    function ghewGhew(){

    }
}
$obj = new Man();
$obj -> ghewGhew();