<?php

class Router
{
    private $controller;
    private $method;
    private $route;

    public function __construct($route = "")
    {
        $this->route = $route;
        $this->matchRoute();
    }

    public function matchRoute()
    {
        $url = explode("/", $this->route);
        $this->controller = ($url[0] != "" ? $url[0] : "Home") . "Controller";
        $this->method = isset($url[1]) ? $url[1] : "index";

        if ($this->controller == "adminController") {
            session_start();
            if (!isset($_SESSION["username"])) {
                header("Location: " . URL_PATH . "/login");
                exit;
            }
        }

        $route_controller = __DIR__ . "/controllers/" . $this->controller . ".php";
        if (file_exists($route_controller)) {
            require_once($route_controller);
        } else {
            echo "Error 404: page not found";
            die();
        }
    }

    public function run()
    {
        $controller = new $this->controller();
        $method = $this->method;
        if (method_exists(($controller), $method)) {
            $controller->$method();
        } else {
            $controller->index();
        }
    }
}
