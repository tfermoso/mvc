<?php

class LoginController
{
    public function index()
    {
        if (isset($_POST["nombre"])) {
            $nombre = $_POST["nombre"];
            $pass = $_POST["password"];
            $conn = new Database();
            $usr = new Usuario($conn->getConnection());
            $usuario = $usr->getUsuario($nombre, $pass);
            if ($usuario) {
                session_start();
                $_SESSION["nombre"] = $usuario["nombre"];
                //header("Location:".URL_PATH."/home");
                require_once($_SERVER['DOCUMENT_ROOT'].URL_PATH.'/Views/admin.view.php');
            } else {
                $error="Usuario o contraseña incorrecta";
                require_once($_SERVER['DOCUMENT_ROOT'].URL_PATH.'/Views/login.view.php');

            }
        } else {
                 
            //var_dump($_SERVER['DOCUMENT_ROOT']);
            //exit;

           require_once($_SERVER['DOCUMENT_ROOT'].URL_PATH.'/Views/login.view.php');
        
        
        }
    }
    public function register()
    {
        if (isset($_POST["nombre"])) {

            $conn = new Database();
            $usr = new Usuario($conn->getConnection());
            $datos = array();
            $datos["nombre"] = $_POST["nombre"];
            $datos["email"] = $_POST["email"];
            $datos["password"] = md5($_POST["password"], false);
            $usr->insertar($datos);
            header("Location:".URL_PATH."/login");
            exit;
        }
        require_once($_SERVER['DOCUMENT_ROOT'].URL_PATH.'/Views/register.view.php');
    }
}