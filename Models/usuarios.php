<?php

class usuarios extends Orm{
    public function __construct($con)
    {
        parent::__construct("id","usuarios",$con);
    }
   
}




?>