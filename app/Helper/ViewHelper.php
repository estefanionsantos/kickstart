<?php

namespace App\Helper;

use Rubricate\Resource\DirectoryPathResource;
use Rubricate\Resource\FileResource;
use Rubricate\Resource\BufferResource;


class ViewHelper
{
    public function __construct($path = null)
    {
        $dir    = (is_null($path))? PATH_VIEW: $path;
        $path   = new DirectoryPathResource($dir);
        $file   = new FileResource($path);
        $buffer = new BufferResource($file);

        $this->file   = $file;
        $this->buffer = $buffer;
    }


    public function render($view, $data = array())
    {
       $this->file->incorporate($view, $data);
    } 


    public function str($view, $data = array())
    {
       return $this->buffer->incorporate($view, $data);
    } 
}    

