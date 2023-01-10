<?php
require_once("config.php");
require_once("router.php");
require_once("./Models/database.php");
require_once("./Models/Orm.php");



$conn=new Database();
$orm=new Orm(24,"profesores",$conn->getConnection());

$datos=array();
$datos["nombre"]="Pepe";
$datos["apellidos"]="Garcia";
$datos["edad"]="35";
$datos["curso"]="css";
$orm->insertar($datos);

echo "<pre>";
var_dump($orm->deleteByid(24));
echo "</pre>";
exit;


$ruta=isset($_GET["route"])?$_GET["route"]:"";
$route=new Router($ruta);
$route->run();