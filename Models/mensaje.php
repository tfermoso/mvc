<?php

class Mensaje extends Orm{
    public function __construct($conn)
    {
        parent::__construct("id", "mensajes", $conn);
    }
}
