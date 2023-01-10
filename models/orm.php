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

    public function getById($id)
    {
        $stm = $this->dbconn->prepare("SELECT * FROM {$this->table} WHERE id=:id");
        $stm->bindValue(":id", $id);
        $stm->execute();
        return $stm->fetch();
    }

    public function deleteById($id)
    {
        $stm = $this->dbconn->prepare("DELETE FROM {$this->table} WHERE id=:id");
        $stm->bindValue(":id", $id);
        $stm->execute();
    }

    public function insert($data)
    {
        $sql = "INSERT INTO {$this->table} ";
        $keys = "(";
        $values = "VALUES (";

        foreach ($data as $key => $value) {
            $keys .= "{$key},";
            $values .= ":{$key},";
        }
        $keys = substr($keys, 0, -1) . ")";
        $values = substr($values, 0, -1) . ")";
        $sql .= $keys . $values;
        $stm = $this->dbconn->prepare($sql);
        foreach ($data as $key => $value) {
            $stm->bindValue(":{$key}", $value);
        }
        $stm->execute();
    }
}
