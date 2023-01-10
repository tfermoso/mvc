<?php
require_once("config.php");
require_once("router.php");
require_once("./Models/database.php");
require_once("./Models/Orm.php");



$conn=new Database();
$orm=new Orm(24,"profesores",$conn->getConnection());

$datos=array();
$datos["nombre"]="Marta";
$datos["apellidos"]="Miguelez";
$datos["edad"]="35";
$datos["curso"]="css";
$orm->updateByid(26,$datos);

echo "<pre>";
var_dump($orm->getAll());
echo "</pre>";
exit;


$ruta=isset($_GET["route"])?$_GET["route"]:"";
$route=new Router($ruta);
$route->run();