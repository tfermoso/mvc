<?php
require_once("config.php");
require_once("router.php");
require_once("./Models/Database.php");
require_once("./Models/Orm.php");



$conn=new Database();
$orm=new Orm(15,"profesores",$conn->getConnection());
$datos=array();
$datos["nombre"]="Manolo";
$datos["apellidos"]="AAAA";
$datos["edad"]=43;
$datos["curso"]="js";
$orm->updateById(17,$datos);


echo "<pre>";
var_dump($orm->getAll());
echo "</pre>";
exit;

$ruta=isset($_GET["route"])?$_GET["route"]:"";
$route=new Router($ruta);
$route->run();

