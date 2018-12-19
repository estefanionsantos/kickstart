<?php


namespace App\Controller;

use App\Helper\ViewHelper;


class Error404
{

    public function index()
    {
        $view = new ViewHelper();
        $view->render('error404');
    } 

}

