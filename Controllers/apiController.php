<?php

class ApiController{

    public function index(){
        $datos=array();
        $conn = new Database();
        $usr = new Mensaje($conn->getConnection());
        echo json_encode($usr->getAllApi());
    }

    public function Message($id=""){
        $id = $_GET["id"];
        $datos=array();
        $conn = new Database();
        $usr = new Mensaje($conn->getConnection());
        echo json_encode($usr->getAllByIdUserDestinoApi($id));
    }
}