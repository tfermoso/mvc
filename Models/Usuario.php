<?php

class Usuario extends Orm
{
    public function __construct($conn)
    {
        parent::__construct("id", "usuarios", $conn);
    }
    public function getUsuario($nombre, $pass)
    {
        try {
            $stm = $this->db->prepare("select * from usuarios where nombre=:nombre and password=:password");
            $stm->bindValue(":nombre", $nombre);
            $stm->bindValue(":password", md5($pass, false));
            $stm->execute();
            $result=$stm->fetch();
            return $result;
        } catch (Exception $ex) {
            var_dump($ex);
        }
    }

    public function getAllLessMe($id){
        $stm=$this->db->prepare("SELECT * FROM usuarios where id!=:id");
        $stm->bindValue(":id",$id);
        $stm->execute();
        return $stm->fetchAll();
    }
}
