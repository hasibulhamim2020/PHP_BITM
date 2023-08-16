<?php

namespace App\classes;

class Action
{

    static public function index(){
        return header('location: route.php?page=about');

    }
}