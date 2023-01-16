<?php

class Mensaje extends Orm{
    public function __construct($conn)
    {
        parent::__construct("id", "mensajes", $conn);
    }
    public function getAllByIdUserDestino($id){
        $stm=$this->db->prepare("SELECT U.nombre,M.mensaje,M.fecha_envio  FROM mensajes as M inner join usuarios as U on M.id_usuario_origen=U.id  where id_usuario_destino=:id");
        $stm->bindValue(":id",$id);
        $stm->execute();
        return $stm->fetchAll();
    }
    public function getAllByIdUserDestinoApi($id){
        $stm=$this->db->prepare("SELECT U.nombre,M.mensaje,M.fecha_envio  FROM mensajes as M inner join usuarios as U on M.id_usuario_origen=U.id  where id_usuario_destino=:id");
        $stm->bindValue(":id",$id);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}