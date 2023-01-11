<?php

class LoginController
{
    public function index()
    {
        if (isset($_POST["nombre"])) {
            $nombre=$_POST["nombre"];
            $pass=$_POST["password"];
            $conn=new Database();
            $usr=new Usuario($conn->getConnection());
            $usuario=$usr->getUsuario($nombre,$pass);
            var_dump($usuario);
            
        } else {
            require_once(__DIR__ . './../Views/login.view.php');
        }
    }
    public function register()
    {
        if (isset($_POST["nombre"])) {

            $conn = new Database();
            $usr = new Usuario($conn->getConnection());
            $datos=array();
            $datos["nombre"]=$_POST["nombre"];
            $datos["email"]=$_POST["email"];
            $datos["password"]=md5($_POST["password"],false);
            $usr->insertar($datos);
            header('Location : mvc');
            exit;
        }
        require_once(__DIR__ . './../Views/register.view.php');
    }
}
