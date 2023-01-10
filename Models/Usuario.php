<?php

class Usuario extends Orm{
    public function __construct($conn)
    {
        parent::__construct("id","usuario",$conn);
    }
    
}
// si quieres crear una nueva tabla en base de datos vas a usuarios php
//copias el codigo de arriba y cambias nombre usuario(tabla)por el nombre de la nueva 
//tabla creada