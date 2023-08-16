<?php

function view($view, $data = [], $print = true){

    $output = 'view not found.';
    $extension = 'views/'.$view.'.php';
    if (file_exists($extension)){
        extract($data);
        ob_start();
        include $extension;
        $output = ob_get_clean();
//        $output = 'view found.';
    }
    if ($print){
        print $output;
    }
}