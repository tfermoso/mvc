<?php

class adminController{
    public function index(){
        $user_name=$_SESSION ["nombre"];
        require_once(__DIR__ . './../views/admin.view.php');
    }
    public function nuevomensaje(){
        $user_name=$_SESSION ["nombre"];
        require_once(__DIR__ . './../views/admin_nuevomensaje.view.php');
    }
}