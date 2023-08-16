<?php


        function autoload ($tata){

            if(file_exists("app/classes/{$tata}.php")){

                include_once "app/classes/{$tata}.php";
            }
            elseif (file_exists("app/classes/controller/{$tata}.php")){

                include_once "app/classes/controller/{$tata}.php";
            }
            elseif (file_exists("app/classes/model/{$tata}.php")){

                include_once "app/classes/model/{$tata}.php";
            }
            elseif (file_exists("app/helpers/{$tata}.php")){

                include_once "app/helpers/{$tata}.php";
            }


        }

   spl_autoload_register('autoload')   ; /// only use for class

        ///callback Fuction
///
/// callback function from "app/classes/" directory

/*

        require_once "app/classes/Camera.php";
        require_once "app/classes/Display.php";
        require_once "app/classes/Ops.php";
        require_once "app/classes/Precessor.php";

        */

?>
