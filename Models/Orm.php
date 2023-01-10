<?php

class Orm
{
    protected $id;
    protected $tabla;
    protected $db;


    public function __construct($id, $tabla, $db)
    {
        $this->id = $id;
        $this->tabla = $tabla;
        $this->db = $db;
    }

    public function getAll()
    {
        $conn=$this->db;
        $stm = $conn->prepare("SELECT * FROM {$this->tabla}");
        $stm->execute();
        return $stm->fetchAll();
    }
}
