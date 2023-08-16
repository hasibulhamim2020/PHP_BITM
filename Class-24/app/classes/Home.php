<?php


namespace App\classes;


class Home
{
    private  $students;
    
    public function __construct()
    {
        $this->students  = [
            0=> [
                "name" => "salimulla",
                "img" => "assets/images/02.jpg",
                "address" => "1rahimulla",
                "age" =>60,
                "class" => 11,
                "email" => "salimulla0@gmail.com",
                "mobile" => "01032312998"
            ],
            1=> [
                "name" => "malimulla",
                "img" => "assets/images/03.jpg",
                "address" => "2rahimulla",
                "age" =>70,
                "class" => 12,
                "email" => "salimulla1@gmail.com",
                "mobile" => "01132312998"
            ],
            2=> [
                "name" => "zalimulla",
                "img" => "assets/images/04.jpg",
                "address" => "3rahimulla",
                "age" =>80,
                "class" => 13,
                "email" => "salimulla2@gmail.com",
                "mobile" => "01232312998"
            ],
            3=> [
                "name" => "kalimulla",
                "img" => "assets/images/05.jpg",
                "address" => "4rahimulla",
                "age" =>90,
                "class" => 14,
                "email" => "salimulla3@gmail.com",
                "mobile" => "01332312998"
            ],
        ];
    }
    public function  getAllData(){
        return $this->students;
    }
    public function index(){
        return header("Location: route.php?page=home");
    }
}