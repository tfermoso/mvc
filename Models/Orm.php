<?php 

class Orm{
    protected $id;
    protected $tabla;
    protected $db;

    public function __construct($id,$tabla,$conn)
    {
        $this->id=$id;
        $this->tabla=$tabla;
        $this->db=$conn;
    }

    public function getAll(){
        $stm=$this->db->prepare("SELECT * FROM {$this->tabla}");
        $stm->execute();
        return $stm->fetchAll();
    }   
    public function getById($id){
        $stm=$this->db->prepare("select * from {$this->tabla} where id=:id");
        $stm->bindValue(":id",$id);
        $stm->execute();
        return $stm->fetch();
    }
}