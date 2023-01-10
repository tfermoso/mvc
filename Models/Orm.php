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
}