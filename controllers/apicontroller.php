<?php

class ApiController
{
    public function index()
    {
        $datos = array();
        $conn = new Database();
        $usr = new Mensajes($conn->getConnection());
       
        echo json_encode($usr->getAllApi());
    }

    public function message($id=""){
        
       
        $datos = array();
        $conn = new Database();
        $usr = new mensajes($conn->getConnection());  
        echo json_encode($usr->getAllByIdUserDestinoApi($id));
    }

    public function new()
    {
        $conn = new Database();
        $msg = new Mensajes($conn->getConnection());
        $datos = array();
        $datos["id_usuario_origen"] = $_POST["idusuario"];
        $datos["id_usuario_destino"] = $_POST["usr_destino"];
        $datos["mensaje"] = $_POST["mensaje"];
        $msg->insertar($datos);
        $respuesta=array();
        $respuesta["msg"]="mensaje enviado";
        echo json_encode($respuesta);
    }
}