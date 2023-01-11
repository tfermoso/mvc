<?php

class Usuario extends Orm{
    public function __construct($conn)
    {
        parent::__construct("id", "usuarios",$conn);
    }
    public function getUsuario($nombre, $pass){
        $stm = $this->db->prepare("select * from usuarios where nombre=:nombre and password=:password");
        $stm->bindValue(":nombre", $nombre);
        $stm->bindValue(":password", md5($pass, false));
        $stm->execute();
        return $stm->fetch();
    }
}