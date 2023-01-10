<?php

class Ususario extends Orm{
    public function __construct($conn)
    {
        parent::__construct("id","users",$conn);
    }
}