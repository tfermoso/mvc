<?php

class AdminController{
    public function index(){
        $user_name = $_SESSION["nombre"];
        require_once(__DIR__.'./../Views/admin.view.php');

 }
    public function nuevomensaje(){
        $user_name = $_SESSION["nombre"];
        $conn=new Database();
        $usr=new Usuario($conn->getConnection());
        $usuarios = $usr->getAllLessMe($_SESSION["id"]);
        require_once(__DIR__.'./../Views/admin.nuevomensaje.view.php');
}
}