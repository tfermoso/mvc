<?php

class adminController{
    public function index(){
        $user_name=$_SESSION ["nombre"];
        require_once(__DIR__ . './../views/admin.view.php');
    }
    public function listar(){
        echo "Hola desde listar del Home";
    }
}