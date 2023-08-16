<?php
require_once 'autoload.php';

(new Camera())->cameras();
(new Processor())->processor();
(new Os())->ops();
(new Display())->display();

$cam = new Display();
echo $cam->display();

include_once 'app/helpers/helper.php';