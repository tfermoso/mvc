<?php

class AdminController{
    public function index(){
        require_once(__DIR__ . './../Views/admin.view.php');
    }
    public function listar(){
        echo "Hola desde listar del Admin";
    }
}








?>