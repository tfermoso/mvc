<?php

class Mensaje extends Orm{
    public function __construct($conn)
    {
        parent::__construct("id", "mensajes", $conn);
    }
    public function getAllByIdUserDestino($id){
        $stm=$this->db->prepare("select * from mensajes where id_usuario_destino=:id");
        $stm->bindValue(":id",$id);
        $stm->execute();
        return $stm->fetch();
    }
}