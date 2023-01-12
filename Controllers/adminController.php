<?php

class AdminController{
    public function index(){
        $user_name=$_SESSION ["nombre"];
        require_once(__DIR__ . './../Views/admin.view.php');
    }
    public function nuevomensaje(){
        $user_name=$_SESSION ["nombre"];
        require_once(__DIR__ . './../Views/admin_nuevomensaje.view.php');
    }
}