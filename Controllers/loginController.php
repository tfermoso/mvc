<?php

class LoginController{
    public function index(){
        if(isset($_POST["nombre"])){
            echo "recibiendo login";
        }else{
            require_once(__DIR__.'./../Views/login.view.php');
        }
    }
    public function register(){
        require_once(__DIR__.'./../Views/register.view.php');
    }
}