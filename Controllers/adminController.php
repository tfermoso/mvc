<?php

class AdminController{
    public function index(){
        session_start();
        $user_name=$_SESSION["nombre"];
        require_once(__DIR__ . './../Views/admin.view.php');
    }
    public function listar(){
        echo "Hola desde listar del Admin";
    }
}