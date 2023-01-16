<?php

class ApiController{

    public function index(){
        $datos=array();
        $conn = new Database();
        $usr = new Mensaje($conn->getConnection());
        echo json_encode($usr->getAllApi());
    }

    public function Message($id=""){
        $datos=array();
        $conn = new Database();
        $usr = new Mensaje($conn->getConnection());
        echo json_encode($usr->getAllByIdUserDestinoApi($id));
    }

    public function new(){

        $conn = new Database();
        $msg = new Mensaje($conn->getConnection());
        $datos = array();
        $datos["id_usuario_origen"] = $_POST["id_usuario_origen"];
        $datos["id_usuario_destino"] = $_POST["id_usuario_destino"];
        $datos["mensaje"] = $_POST["mensaje"];
      
        $msg->insertar($datos);
        $res=array();
        $res["msg"] = "Mensaje enviado";
        echo json_encode($res);    
    
    }
}