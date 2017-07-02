<?php


namespace App\Controller;

use Rubricate\View;

class Index
{
    public function __construct() 
    { }

    public function index()
    {
        $view = new View\LoadView('index');
        $view->render();
    } 

}




