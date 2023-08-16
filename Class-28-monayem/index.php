<?php


//        require_once "vendor/autoload.php";
//
//        use App\classes\HomeController;
//
//        HomeController::index();

/*
        $arr = array('this' => 'is', 'some' =>'stuff');

//        $url = 'route.php?vals='.urlencode(serialize($arr));
        $url = 'route.php?vals='.serialize($arr);

        header("Location: $url");


*/

        require_once "autoload.php";

        $camera = new Camera();

        $camera->camera();


        $display = new Display();

        $display->Display();

        $ops = new Ops();

        $ops->operatingSystem();


        $processor = new Precessor();

        $processor->processor();


           $homeController=new HomeController();

           $homeController->test();

           $model = new Model();

           $model->action();


                help();













