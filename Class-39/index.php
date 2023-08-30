<?php
//class One{
//    private $name = "name";
//    private $name2 = "name2";
//    private $name3 = "name3";
//    private $name4 = "name4";
//
//    function __get($value)
//    {
//        return $this->value;
//    }
//    function __set($value,$rvalue)
//    {
//        return  $this->$value = $rvalue;
//    }
//
//}
//$obj = new One();
//echo $obj->name4 = 'hamim';
//class Districts implements IteratorAggregate, Countable {
//    private  $dis = [];
//    function  __construct()
//    {
//        $this->dis = ["aa","bb","cc","dd","ee"];
////        array_push($this->dis,$val);
//    }
//    public function getIterator()
//    {
//        // TODO: Implement getIterator() method.
//        return new ArrayIterator($this->dis);
//    }
//    public function count()
//    {
//        // TODO: Implement count() method.
//        return count($this->dis);
//    }
//}
//$obj = new Districts();
//echo count($obj);
//echo "<br>";
//echo "<br>";
//foreach ($obj as $e){
//echo $e.",";
//}

file_put_contents("file.txt","hello \n"."\n",FILE_APPEND);
$data = file_get_contents("file.txt");
$dataAlada = explode("\n",$data);
print_r($dataAlada);



