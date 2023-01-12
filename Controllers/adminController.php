<?php

class AdminController
{
    public function index()
    {
        $user_name = $_SESSION["nombre"];
        require_once(__DIR__ . './../Views/admin.view.php');
    }
    public function nuevomensaje()
    {
        $user_name = $_SESSION["nombre"];
        $conn = new Database();
        $usr = new Usuario($conn->getConnection());
        $usuarios=$usr->getAllLessMe($_SESSION["idusuario"]);
        $options="";
        foreach ($usuarios as $key => $value) {
            $options.="<option value=".$value['id'].">".$value['nombre']."</option>";
          }
        require_once(__DIR__ . './../Views/admin_nuevomensaje.view.php');
    }
}