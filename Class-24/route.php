<?php

include_once "pages/templete-parts/header.php";
if ("home" == $_GET['page']){

    include_once "pages/home.php";

}
elseif ("about" == $_GET['page']){

    include_once "pages/about.php";

}
include_once "pages/templete-parts/footer.php";