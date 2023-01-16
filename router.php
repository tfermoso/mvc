<?php

class Router
{
    private $controller;
    private $method;
    private $param;
    private $ruta;

    public function __construct($ruta = "")
    {
        $this->ruta = $ruta;
        $this->matchRoute();
    }

    public function matchRoute()
    {

        $url = explode("/", $this->ruta);

        $this->controller = ($url[0] != "" ? $url[0] : "Home") . "Controller";
        $this->method = isset($url[1]) ? $url[1] : "index";
        $this->param = isset($url[2]) ? $url[2] : null;

        if ($this->controller == "adminController") {
            session_start();
            if (!isset($_SESSION["nombre"])) {
                header("Location: " . URL_PATH . "/login");
                exit;
            }
        }

        $ruta_controlador = __DIR__ . '/controllers/' . $this->controller . '.php';
        if (file_exists($ruta_controlador)) {
            require_once($ruta_controlador);
        } else {
            echo "page 404";
        }
    }

    public function run()
    {
        $controller = new $this->controller();
        $method = $this->method;
        if (method_exists($controller, $method)) {
            if ($this->param != null) {
                $controller->$method($this->param);
            } else {
                $controller->$method();
            }
        } else {
            $controller->index();
        }
    }
}
