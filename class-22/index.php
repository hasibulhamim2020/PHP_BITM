<?php

// Array
//
//$empty_array = array();
//
//$empty_array[0]="Monayem";
//$empty_array[1]="Foysal";
//$empty_array[2]="Nurul";
//$empty_array[3]="Shizan";
//echo "<pre>";
//foreach ($empty_array as $i)
//{
//    echo $i."<br>";
//}
//
//echo "<pre>";
//
//$names = ['Monayem', 'Tamim','Shamim'];
//echo "<pre>";
//print_r($names);
//
//echo "</pre>";

//
//$names = ['Monayem', 'Tamim','Shamim',69.69,69,true];
//echo "<pre>";
//print_r($names);
//
//echo "</pre>";
//
//echo "$names[3]". "<br>";
//echo "$names[2]". "<br>";
//
//
//$names[2]="Tamim Khan";
//
//echo "<pre>";
//print_r($names);
//
//echo "</pre>";
//
//$names[5]="Test";
//
//echo "<pre>";
//print_r($names);
//
//echo "</pre>";
//echo count($names);
//
//array_push($names,"Test2");
//echo "<pre>";
//print_r($names);
//


//$names = ['Monayem', 'Tamim','Shamim',69.69,69,true];
//$names = ['Monayem', 'Tamim','Shamim',69.69,69,1,83,"ABC","DEF"];
//echo "<pre>";
//print_r($names);




//foreach ($names as $name){
////    echo "<p>$name</p>". "&nbsp";
////    echo "$name". "&nbsp &nbsp &nbsp";
////    echo  "$name &nbsp &nbsp &nbsp";
//
//    if ($name==="false"){
//        echo  "{$name}";
//    }
//    else{
//        echo  "{$name}, ";
//    }
//
//}

//$limit = count($names);

//foreach ($names as $index => $name) {
//
//    if ($limit - 1 == $index) {
//        echo "$index: {$name}";
//    } else {
//        echo "$index: {$name}, ";
//    }
//
//
//}

//for ($x =0,$k=1; $x < $limit ;$x++,$k++){
//
//    if($k % 3 == 0){
//        echo $names[$x]." <br>";
//    }else{
//        echo $names[$x].",";
//    }
//
//}

//
//        $person = [
//
//            'bangladeshi' => [
//                'name' => "Monayem Ali",
//                'Age' => 26,
//                'mobile' => [
//                    "GP" => "017",
//                    "Airtel" => "018",
//                ]
//            ],
//            'nepali' => [
//                'name' => "Foisal Thapa",
//                'Age' => 28,
//                'mobile' => [
//                    "ppp" => "017454",
//                    "rrrr" => "045418",
//                ]
//            ],
//            'SriLankan' => [
//                'name' => "Foisal123 Thapa",
//                'Age' => 27,
//                'mobile' => [
//                    "oooo" => "01888",
//        //            "pppp" => "0189998",
//                    "pppp" => [
//                        0 => [
//                            0 => [
//                                'hello' => "Hello Bangladesh"
//                            ]
//                        ]
//                    ]
//                ]
//            ]
//
//
//        ];
//
//
//        echo "<pre>";
//        //print_r($person);
//        echo $person['bangladeshi']['mobile']['Airtel'] . "<br>";
//        //echo $person['SriLankan']['mobile']['pppp']."<br>";
//        echo $person['SriLankan']['mobile']['pppp'][0][0]['hello'] . "<br>";
//        $person['SriLankan']['mobile']['pppp'][0][0]['hello'] = "Monayem";
//        echo $person['SriLankan']['mobile']['pppp'][0][0]['hello'] . "<br>";


//    $persons =[
//        "bangladeshi" => "Samim Mollah",
//        "nepali"   => "Lamichan",
//        "srilankan" => "Abc",
//        "pakistani" => "Afridi",
//        "vutani" => "Thimfu",
//        "male" => "Kochu"
//
//    ];
//
//    array_keys();
//    array_values()


/**
 *        function
 *
 *
 * */

//    $name = "Monayem ";
//    $age = 26;
      //global scope
//      function test(){
//    //      $name = "Monayem SK";
//    //      global $name;
//
//        echo  $GLOBALS['name'];
//        echo "<pre>";
//        print_r($GLOBALS);
       //   echo "$name";

          //local scope
//      }

//echo "$name";


//  test();


//        function getInfo($name, int $age = 20): int
//        {
//
//            return $age;
//
//            echo "The name : {$name}, Age : {$age}";
//
//        }
//
//
//        getInfo("Monayem", 27);
//        echo "<br>";
//        getInfo("Monayem");
//        echo getInfo("Monayem");
//        echo getInfo("A", 27);


//        function one(){
//            two();
//            three();
//        }
//
//        function two(){
//            echo "Hello";
//        }
//
//        function three(){
//            echo " Hello  Hi";
//
//        }
//
//        one();



//       associativeArray

//            $array = array(0 => 100, "color" => "red");
//            print_r(array_keys($array));
//
//            $array = array("blue", "red", "green", "blue", "blue");
//            print_r(array_keys($array, "blue"));
//
//            $array = array("color" => array("blue", "red", "green"),
//                "size"  => array("small", "medium", "large"));
//            print_r(array_keys($array));


//        $array = array('key1' => 'value1', 'key2' => 'value2');
//
//        $keys = array_keys($array);
//
//        for($i=0; $i < count($keys); ++$i) {
//            echo $keys[$i] . ' ' . $array[$keys[$i]] . "\n";
//        }
//
//        /*
//          prints:
//          key1 value1
//          key2 value2
//        */

//
//                $data = ['a' => 'Apple',
//                    'm' => 'Microsoft',
//                    'b' => 'Amazon',
//                    'c' => 'Alphabet',
//                    'f' => 'Facebook'];
//
//                print_r(array_values($data));

//
//        $data = array(
//            19 => 21,
//            21 => 19,
//            46 => 21,
//        );
//
//        $data[29] = 21;
//        echo "<pre>";
//        print_r($data);
//
//        echo 'After array_values() function';
//        print_r(array_values($data));


                $persons =[
                        "bangladeshi" => "Samim Mollah",
                        "nepali"   => "Lamichan",
                        "srilankan" => "Abc",
                        "pakistani" => "Afridi",
                        "vutani" => "Thimfu",
                        "male" => "Kochu"

                    ];

                $keys= array_keys($persons);
                echo "<pre>";
                print_r($keys);
                echo "<br>";
                echo "<br>";

                for ($i=0; $i < count($keys); $i++){
                    echo $persons[$keys[$i]]."<br>" ;
                }

                echo "<br>";
                echo "<br>";

                print_r(array_values($persons));



//    array_keys();
//    array_values()








?>

<!---->
<!--<p>&ropf;</p>-->
<!--<p>&awconint;</p>-->
<!--<p>&ohm;</p>-->
<!--<p>&darr;</p>-->



