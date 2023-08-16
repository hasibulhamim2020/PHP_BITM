<?php

require_once "vendor/autoload.php";

use App\classes\Home;

if(isset($_GET['page'])){
    include_once "pages/t-parts/header.php";
    if('home' == $_GET['page']){
        include_once "pages/home.php";
    }elseif ('all-student' == $_GET['page']){
        $allStudentData = (new Home())->getAllStudents();
        include_once "pages/all-student.php";
    }elseif ("student-details" == $_GET['page']){
        include_once "pages/student-details.php";
    }
    include_once "pages/t-parts/footer.php";
}
