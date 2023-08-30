<?php
interface BasicTest{
    function eyeTest();
    function basicComputer();
}

class DefenseField implements BasicTest{
    function eyeTest(){
        echo "passed";
    }
    function basicComputer(){
        echo "passed";
    }
//    public function selected($name){
//        echo "{$name} is selected as a public officer";
//    }
    public function selected(){
        echo "is selected as a public officer";
    }
}

class person{
    private $name;
    public function __construct($val)
    {
        $this->name = $val;
    }
    function achivment(){
        (new DefenseField())->selected($this->name);
    } //tightly cuplled
//    function achivment(){
//        (new DefenseField())->selected($this->name);
//    }
}

$obj = new Person ('jamal');
//php globe function