<?php

class User extends Orm
{

    public function __construct($conn)
    {
        parent::__construct("id", "users", $conn);
    }

    public function login($username, $password)
    {
        $stm = $this->dbconn->prepare("SELECT * FROM {$this->table} WHERE 
                username=:username AND password=:password");
        $stm->bindValue(":username", $username);
        $stm->bindValue(":password", $password);
        $stm->execute();
        return $stm->fetch();
    }

    public function getAllBut($id){
        $stm=$this->dbconn->prepare("SELECT * FROM users where id!=:id");
        $stm->bindValue(":id",$id);
        $stm->execute();
        return $stm->fetchAll();
    }


}
