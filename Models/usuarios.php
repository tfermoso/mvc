<?php

class usuarios extends Orm

{
    public function __construct($con)
    {
        parent::__construct("id","usuarios",$con);

    }
    public function getUsuario($nombre,$pass)

    {
        try{
            $stm=$this->db->prepare("select * from usuarios WHERE nombre=:nombre and password=:password" );
            $stm->bindvalue("nombre",$nombre);
            $stm->bindvalue(":password",md5($pass,false ));
            $stm->execute();
            $result= $stm ->fetch();
            return $result;
        } catch (Exception $ex) 
        {
            var_dump($ex);
        }

        }
    
    
   
}

?>




