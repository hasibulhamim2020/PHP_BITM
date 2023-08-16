<?php

//echo getcwd();
/*    <link rel="stylesheet" href="<?php assets("css/bootstrap.css"); ?>">*/
require_once "vendor/autoload.php";

use \App\classes\Home;
//use \App\classes\Home2;

//echo Home::$products;  // static hotey hobe . tobey scope resulation operator use kora jabe. benifit holo kono object lagbe na.
//(new Home())->test();
//Home::test();   // static hotey hobe.
//function one(){
//    static $a = 20; //if any variable declare as static it cannot able to reasign. it always store previous value
//    echo $a;
//    $a++;
//}
//one();
//one();
//one();
//Home2::test2();

interface  Test
{
    function one($a, $b);
    function two();
}
class JustTest implements Test
{
    function one($a, $l)
    {

    }
    function two()
    {

    }
}