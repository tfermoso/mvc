<?php

class Orm
{
    protected $id;
    protected $table;
    protected $dbconn;

    public function __construct($id, $table, $conn)
    {
        $this->id = $id;
        $this->table = $table;
        $this->dbconn = $conn;
    }

    public function getAll()
    {
        $stm = $this->dbconn->prepare("SELECT * FROM {$this->table}");
        $stm->execute();
        return $stm->fetchAll();
    }
}
