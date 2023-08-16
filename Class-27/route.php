<?php

require_once "vendor/autoload.php";

use App\classes\HomeController;

HomeController::router($_GET['page']);