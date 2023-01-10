<?php

class Database
{
    private $connection;

    public function __construct()
    {
        try {
            $url_conexion = "mysql:host=" . HOST . ";dbname=" . DBNAME;
            $this->connection = new PDO($url_conexion, DB_USER, DB_PASSWORD);
            
        } catch (PDOException $pe) {
            $this->connection = null;
            die("error al conectarme");
        }
    }
    public function getConnection()
    {
        return $this->connection;
    }
    public function closeConnection()
    {
        $this->connection = null;
    }
}
