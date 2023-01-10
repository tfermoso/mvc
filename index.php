<?php
require_once("config.php");
require_once("router.php");
require_once("./Models/database.php");
require_once("./Models/Orm.php");
require_once("./Models/Usuario.php");


$conn=new Database();
$usr=new Usuario($conn->getConnection());

$datos=array();
$datos["nombre"]="Marta";
$datos["email"]="marta@gmail.com";
$datos["password"]="12345";

$usr->getByid(1);

echo "<pre>";
var_dump($usr->getAll());
echo "</pre>";
exit;


$ruta=isset($_GET["route"])?$_GET["route"]:"";
$route=new Router($ruta);
$route->run();