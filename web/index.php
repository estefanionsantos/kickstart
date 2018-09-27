<?php

define('PATH_VIEW', '../app/view/');

require '../vendor/autoload.php';



$app = new Rubricate\Relevant\ApplicationRelevant(
    new Rubricate\Relevant\ControllerNamespaceRelevant('App.Controller'),
    new Rubricate\Uri\Uri()
);

$app->run();

