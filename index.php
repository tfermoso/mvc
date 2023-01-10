<?php
require_once("config.php");
require_once("router.php");
require_once("./Models/database.php");
require_once("./Models/Orm.php");

$conn=new Database();
$orm=new Orm(1,"profesores", $conn->getConnection());
echo "<pre>";
var_dump($orm->getAll());
echo "</pre>";
exit;

$ruta=isset($_GET["route"])?$_GET["route"]:"";
$route=new Router($ruta);
$route->run();