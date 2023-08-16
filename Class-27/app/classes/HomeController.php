<?php

namespace App\classes;

use App\classes\Model\Student;

class HomeController extends Action
{

    static private function home(){
        include_once "templates-parts/home.php";
    }
    private function about($data = ""){
        $allData = $data;
        include_once "templates-parts/about.php";
    }

    static public function router($data){
        if ("home" == $data){
           self::home();
        }elseif ("about" == $data){
           $data = Student::getAllStudents();
            (new HomeController())->about($data);
        }
    }
}