<?php
require_once("config.php");
require_once("router.php");
require_once("./Models/Database.php");
require_once("./Models/Orm.php");
require_once("./Models/Usuario.php");



$conn=new Database();
$usr=new Usuario($conn->getConnection());
$datos=array();
$datos["nombre"]="PEPE";
$datos["email"]="Gonzalez";
$datos["password"]="asdf";

$usr->insertar($datos);


echo "<pre>";
var_dump($usr->getAll());
echo "</pre>";
exit;

$ruta=isset($_GET["route"])?$_GET["route"]:"";
$route=new Router($ruta);
$route->run();

// si quieres crear una nueva tabla en base de datos vas a usuarios php
//copias el codigo de arriba y cambias nombre usuario(tabla)por el nombre de la nueva 
//tabla creada