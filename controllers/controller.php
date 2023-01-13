<?php

class controller
{
    protected function render($path,$parameters=[],$layout)
    {
        
        ob_start();
        require_once(__DIR__."/../View/".$path.".view.php");
        $content=ob_get_clean();
        require_once(__DIR__."/../View/".$layout.".layout.php");


    }
}









