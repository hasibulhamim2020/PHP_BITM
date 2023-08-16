<?php

require_once 'vendor/autoload.php';

use App\classes\Home;
new Home();

$home = new Home();

if (isset($_GET['page'])){
    if ($_GET['page'] == 'home'){
        $home->index();
    }
    if ($_GET['page'] == 'portfolio'){
        $home->portfolio();
    }
    if ($_GET['page'] == 'contact'){
        $home->contact();
    }
}
