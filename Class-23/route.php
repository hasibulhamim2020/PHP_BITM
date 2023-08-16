<?php

//echo $_GET['page'];
require_once "vendor/autoload.php";
use App\classes\Home;

if ("home" == $_GET['page']){
    $home = new Home();
    $students = $home->getAllStudents();
    include_once "pages/home.php";
}



