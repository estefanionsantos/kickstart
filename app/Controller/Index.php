<?php


namespace App\Controller;

use App\Helper\ViewHelper;


class Index
{
    public function __construct() 
    { 
    }

    public function index()
    {
        $view = new ViewHelper();
        $view->render('index');
    } 

}




