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
                "img"   => "assets/img/01.jpg",
                "address" => "Dhaka, Bangladesh",
                "age"   => 13,
                "class"   => 9,
                "email" => "sakib@gmail.com",
                "mobile" => "01680000000"
            ],
            1 => [
                "name" => "Karim Khan",
                "img"   => "assets/img/02.jpg",
                "address" => "Rajsahi, Bangladesh",
                "age"   => 13,
                "class"   => 9,
                "email" => "karim@gmail.com",
                "mobile" => "01681111111"
            ],
            2 => [
                "name" => "Rohim Khan",
                "img"   => "assets/img/03.jpg",
                "address" => "Gopalganj, Bangladesh",
                "age"   => 13,
                "class"   => 9,
                "email" => "rohim@gmail.com",
                "mobile" => "01682222222"
            ],
            3 => [
                "name" => "Navin Saha",
                "img"   => "assets/img/04.jpg",
                "address" => "Bandarban, Bangladesh",
                "age"   => 14,
                "class"   => 9,
                "email" => "navin@gmail.com",
                "mobile" => "01683333333"
            ],
            4 => [
                "name" => "Neyamot Hossen",
                "img"   => "assets/img/05.jpg",
                "address" => "Dhaka, Bangladesh",
                "age"   => 12,
                "class"   => 9,
                "email" => "neyamot@gmail.com",
                "mobile" => "01684444444"
            ],
        ];
    }

}