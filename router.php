<?php

class Router{
    private $controller;
    private $method;
    private $ruta;

    public function __construct($ruta="")
    {
        $this->ruta=$ruta;
        $this->matchRoute();
    }

    public function matchRoute(){
        $url=explode("/",$this->ruta);
  
        $this->controller=($url[0]!=""?$url[0]:"Home")."Controller";
        $this->method=isset($url[1])?$url[1]:"index";
        
        $ruta_controlador=__DIR__.'/Controllers/'.$this->controller.'.php';

        if(file_exists($ruta_controlador)){
            require_once($ruta_controlador);
        }else{
            echo "page 404";
        }  
    }

    public function run(){
        $controller=new $this->controller();
        $method=$this->method;
        if(method_exists($controller,$method)){
            $controller->$method();
        }else{
            $controller->index();
        }
        
    }


}