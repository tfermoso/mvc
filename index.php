<?php
require_once("config.php");
require_once("router.php");
require_once("./Models/Database.php");
require_once("./Models/Orm.php");



$conn = new Database();
$orm = new Ususario($conn->getConnection());
$datos = array();
$datos["nombre"] = "Manolo";
$datos["email"] = "manolo@gmail.com";
$datos["password"] = "12345";

$usr->insertar($datos);


echo "<pre>";
var_dump($orm->getAll());
echo "</pre>";
exit;

$ruta = isset($_GET["route"]) ? $_GET["route"] : "";
$route = new Router($ruta);
$route->run();
