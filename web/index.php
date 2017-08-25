<?php

define('RUBRICATE_PATH_VIEW', '../app/view/');

require '../vendor/autoload.php';



$app = new Rubricate\Kernel\ApplicationKernel('App.Controller');
$app->run();

