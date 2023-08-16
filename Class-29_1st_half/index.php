<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        li{
            list-style: none;
            float: left;
            margin: 10px;
        }
        .folder{
            font-size: 50px;
            color:burlywood;
        }
        .file{
            font-size: 50px;
            color:#565e64;
        }
    </style>
</head>
<body>




<?php
require_once 'autoload.php';

//(new Camera())->cameras();
//(new Processor())->processor();
//(new Os())->ops();
//(new Display())->display();

//$cam = new Display();
//echo $cam->display();

//include_once 'app/helpers/helper.php';

$dir = scandir(getcwd());
//print_r($dir);
//echo "<br>";
//echo "<br>";

foreach ($dir as $d){
    if ('.' != $d && '..' != $d){
        if (is_dir($d)){
            echo "<li>
                        <li>
                        <i class=\"fa-solid fa-folder-open folder\"></i> <br> {$d} <br> <br>
                        </li>
                        </ul>";
        }
    }
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
foreach ($dir as $d){
    if ('.' != $d && '..' != $d){
        if (!is_dir($d)){
            echo "<li>
                        <li>
                        <i class=\"fa-brands fa-php file\"></i> <br> {$d} <br> <br>
                        </li>
                        </ul>";
        }
    }
}
?>
</body>
</html>