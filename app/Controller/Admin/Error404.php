<?php


namespace App\Controller\Admin;

use App\Helper\ViewHelper;


class Error404
{

    public function index()
    {
        echo __METHOD__;
        exit();
        $view = new ViewHelper();
        $view->render('error404');
    } 

    

}


