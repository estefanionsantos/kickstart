<?php

define('RUBRICATE_PATH_VIEW', '../app/view/');

require '../vendor/autoload.php';



$app = new Rubricate\Init\ApplicationInit(
       new Rubricate\Init\ControllerNamespaceInit('App.Controller')
);

$app->run();

