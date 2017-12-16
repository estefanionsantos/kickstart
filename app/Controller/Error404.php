<?php


namespace App\Controller;

use Rubricate\View\View;

class Error404
{

    public function index()
    {
        $view = new View();
        $view->render('error404');
    } 

}





