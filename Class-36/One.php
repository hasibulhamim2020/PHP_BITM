<?php

namespace One\kkk;

require_once  "Two.php";
use Two\kkk\Two;

class One extends Two
{
    public function test(){
        echo "testing";
    }
}