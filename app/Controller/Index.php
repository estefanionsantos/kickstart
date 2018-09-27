<?php


namespace App\Controller;

use Rubricate\View\RenderView;
use Rubricate\View\PathRenderView;

class Index
{
    public function __construct() 
    { 
    }

    public function index()
    {
        $path = new PathRenderView(PATH_VIEW);
        $view = new RenderView($path);
        $view->render('index');
    } 

}




