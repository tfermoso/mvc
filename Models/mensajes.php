<?php

class mensajes extends Orm{

    public function __construct($con)
    {
        parent:: __construct("id","mensajes",$con);
    }
}








?>