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
}
