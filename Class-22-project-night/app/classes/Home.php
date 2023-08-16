<?php

namespace App\classes;

class Home
{
    public  function index(){
        return view('home');
    }
    public  function portfolio(){
        return view('portfolio');
    }
    public  function contact(){
        return view('contact');
    }
}