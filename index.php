<?php
require_once("config.php");
require_once("router.php");
require_once("./Models/Database.php");
require_once("./Models/Orm.php");
require_once("./Models/Usuario.php");

/*

$conn = new Database();
$orm = new Usuario($conn->getConnection());
$datos = array();
$datos["nombre"] = "Manolo";
$datos["mail"] = "manolo@gmail.com";
$datos["password"] = "1234";

$orm->insertar($datos);


echo "<pre>";
var_dump($orm->getAll());
echo "</pre>";
exit;
*/
$ruta = isset($_GET["route"]) ? $_GET["route"] : "";
$route = new Router($ruta);
$route->run();
