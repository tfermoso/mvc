<?php

class LoginController{
    public function index(){
        if(isset($_POST["nombre"])){
            echo "recibiendo login";
        }else{
            require_once(__DIR__.'./../Views/login.view.php');
        }
    }
    public function form(){
        echo "hola desde el form del Login";
    }
}