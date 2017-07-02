<?php

define('RUBRICATE_PATH_VIEW', '../app/view/');

require '../vendor/autoload.php';



$app = new Rubricate\Mvc\AppMvc('App.Controller');
$app->run();

