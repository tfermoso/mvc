<?php

class Message extends Orm
{
    public function __construct($conn)
    {
        parent::__construct("id", "messages", $conn);
    }

    public function getAllByIdDestinyUser($id_user_destiny)
    {
        $stm = $this->dbconn->prepare("SELECT * FROM Messages WHERE id_user_destiny=:id");
    }
}
