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
        
        if (isset($_POST["usr_destino"])) {
            
            $conn = new Database();
            $usr = new Mensaje($conn->getConnection());
            $datos=array();
            $datos["id_usuario_origen"]=$_SESSION["idusuario"];
            $datos["id_usuario_destino"]=$_POST["usr_destino"];
            $datos["mensaje"]=$_POST["mensaje"];
            $usr->insertar($datos);
            header("Location:".URL_PATH."/admin");
        } else {
            $user_name = $_SESSION["nombre"];
            $conn = new Database();
            $usr = new Usuario($conn->getConnection());
            $usuarios = $usr->getAllLessMe($_SESSION["idusuario"]);
            $options = "";
            foreach ($usuarios as $key => $value) {
                $options .= "<option value=" . $value['id'] . ">" . $value['nombre'] . "</option>";
            }
            require_once(__DIR__ . './../Views/admin_nuevomensaje.view.php');
        }
    }
}
