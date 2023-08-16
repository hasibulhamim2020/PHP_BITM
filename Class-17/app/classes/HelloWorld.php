<?php


namespace App\classes;


class HelloWorld
{

    public $name;

    public function __construct()
    {
        $this->name = 'king boy juwel';
    }

    public function index(){
        echo $this->name;
    }

}