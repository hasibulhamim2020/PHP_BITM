<?php

//namespace Cpp\classes;

//require_once "app/classes/HelloWorld.php";
require_once "vendor/autoload.php";

use Cpp\classes\HelloWorld;
use Cpp\classes\Hello;
//use Cpp\classes\Hello;

$obj = new HelloWorld();
echo  $obj->name;
$obj1 = new Hello();
echo  $obj1->age;

$a_Age=30;
$b_Age=30;

if ($a_Age > $b_Age){
    echo "nothing can do";
}
else if ($a_Age == $b_Age){
    echo "something can do";
}
else{
    echo "everything can do";
}

echo "<br>";
echo "<br>";

$age=26;

if ($age<20)
{
    echo "He/She is still kid";
}
else if ($age>=20 && $age <=35)
{
    if ($age == 25){
        echo "He/She is absolute young";
    }
    else{
        echo "He/She is young";
    }
}
else if ($age>35 && $age <=50)
{
    echo "He/She is adult person";
}
else
    {
    echo "He/She is old person";
}

echo "<br>";
echo "<br>";

switch ($age){
    case 20:
        echo "He/She 20";
        break;
    case 25:
        echo "He/She 25";
        break;
    case 30:
        echo "He/She 30";
        break;
    case 35:
        echo "He/She 35";
        break;
    default:
        echo "press 20 or 25 or 30 or 35";
        break;
}

echo "<br>";
echo "<br>";

for ( $age1 = 5, $age2 = 20; $age1<10; $age1++, $age2-- )
{
    echo "{$age1} : hello {$age2} <br>";

}
echo "<br>";
echo "<br>";


$age=10;
while ($age<15){
    echo $age." <br>";
    $age++;
}
echo "<br>";
echo "<br>";
$age3=10;
do{
    if($age3==14){
        echo $age3;
        ++$age3;
    }
    else{
        echo $age3." <br>";
        $age3++;
    }
}while($age3<15);



