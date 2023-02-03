<?php

class ApiController
{
    public function index()
    {
        $datos = array();
        $conn = new Database();
        $usr = new Mensaje($conn->getConnection());
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header("Allow: GET, POST, OPTIONS, PUT, DELETE");
        echo json_encode($usr->getAllApi());
    }

    public function message($id = "")
    {
        $datos = array();
        $conn = new Database();
        $usr = new Mensaje($conn->getConnection());
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header("Allow: GET, POST, OPTIONS, PUT, DELETE");
        echo json_encode($usr->getAllByIdUserDestinoApi($id));
    }

    public function new()
    {
        $conn = new Database();
        $msg = new Mensaje($conn->getConnection());
        $datos = array();
        $datos["id_usuario_origen"] = $_POST["id_usuario_origen"];
        $datos["id_usuario_destino"] = $_POST["id_usuario_destino"];
        $datos["mensaje"] = $_POST["mensaje"];
        $msg->insertar($datos);
        $respuesta = array();
        $respuesta["msg"] = "mensaje enviado";
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header("Allow: GET, POST, OPTIONS, PUT, DELETE");
        echo json_encode($respuesta);
    }
    public function delete($id = "")
    {
        $conn = new Database();
        $msg = new Mensaje($conn->getConnection());
        $msg->deleteById($id);
        $respuesta["msg"] = "mensaje eliminado";
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header("Allow: GET, POST, OPTIONS, PUT, DELETE");
        echo json_encode($respuesta);
    }

    public function login()
    {
        $conn = new Database();
        $usr = new Usuario($conn->getConnection());

        $nombre = $_POST["nombre"];
        $password = $_POST["password"];

        $usuario = $usr->getUsuario($nombre, $password);
        if ($usuario != null) {
            $respuesta["msg"] = "login ok";
            $respuesta["usuario"] = $usuario;
            header('Access-Control-Allow-Origin: *');
            header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
            header("Allow: GET, POST, OPTIONS, PUT, DELETE");
            echo json_encode($respuesta);
        } else {
            $respuesta["msg"] = "Usuario o contraseña incorrecta";
            
            header('Access-Control-Allow-Origin: *');
            header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
            header("Allow: GET, POST, OPTIONS, PUT, DELETE");
            echo json_encode($respuesta);
        }
    }
}
