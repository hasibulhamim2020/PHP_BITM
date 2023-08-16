<?php


namespace App\classes;


class Home
{


    private $students;

    public function index(){

       return header('Location: route.php?page=home');
    }

    public function getAllStudents(){

        return $this->students = [
            0 => [
                "name" => "Sakib Khan",
                "img" => "assets/img/02.jpg",
                "address" => "Dhaka, Bangladesh",
                "age" => 13,
                "class" => 9,
                "email" => "sakib@gmail.com",
                "mobile" => "0174711111111"
            ],
            1 => [
                "name" => "Nurul Khan",
                "img" => "assets/img/06.jpg",
                "address" => "Tangail, Bangladesh",
                "age" => 26,
                "class" => 9,
                "email" => "Nurul@gmail.com",
                "mobile" => "01747777777"
            ],
            2 => [
                "name" => "Arif Khan",
                "img" => "assets/img/03.jpg",
                "address" => "Savar, Bangladesh",
                "age" => 25,
                "class" => 9,
                "email" => "Arif@gmail.com",
                "mobile" => "01747222222"
            ],
            3 => [
                "name" => "Tikka Khan",
                "img" => "assets/img/04.jpg",
                "address" => "Mirpur, Bangladesh",
                "age" => 26,
                "class" => 9,
                "email" => "Tikka@gmail.com",
                "mobile" => "01747333333"
            ],
            4 => [
                "name" => "Foysal Khan",
                "img" => "assets/img/05.jpg",
                "address" => "Shahabag, Bangladesh",
                "age" => 27,
                "class" => 9,
                "email" => "Tikka@gmail.com",
                "mobile" => "0174744444"
            ],
        ];


    }



}