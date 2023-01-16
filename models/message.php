<?php

class Message extends Orm
{
    public function __construct($conn)
    {
        parent::__construct("id", "messages", $conn);
    }

    public function getAllByIdDestinyUser($id_user_destiny)
    {
        $stm=$this->dbconn->prepare("SELECT U.username,M.message,M.date  
                        FROM messages as M inner join users as U on M.id_user_origin=U.id
                        WHERE M.id_user_destiny=:id");
        $stm->bindValue(":id",$id_user_destiny);
        $stm->execute();
        return $stm->fetchAll();
    }

    public function getAllByIdDestinyUserAPI($id_user_destiny)
    {
        $stm=$this->dbconn->prepare("SELECT U.username,M.message,M.date  
                        FROM messages as M inner join users as U on M.id_user_origin=U.id
                        WHERE M.id_user_destiny=:id");
        $stm->bindValue(":id",$id_user_destiny);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}
