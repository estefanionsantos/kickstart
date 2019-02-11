<?php

define('PATH_VIEW', '../app/view/');

require '../vendor/autoload.php';



$app = new Rubricate\Relevant\ApplicationRelevant(
    new Rubricate\Relevant\ControllerNamespaceRelevant('App.Controller'),
    new Rubricate\Uri\Uri()
);

$app->setControllerError404([
    '/'     => 'Error404',
    'Admin' => 'Admin\\Error404'
]);

$app->run();

