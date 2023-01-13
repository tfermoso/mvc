<?php
require_once("config.php");
require_once("router.php");
require_once("./Models/Database.php");
require_once("./Models/Orm.php");
require_once("./Models/usuarios.php");
require_once("./Models/Mensajes.php");
require_once("./controllers/controller.php");

$parameters=array();
$parameters["mensajes"]="algo";
$parameters["otros"]="otra cosa";
foreach($parameters as $key =>$value){
    $$key=$value;
}


/*
$conn=new Database();
$usr=new Usuario($conn->getConnection());
$datos=array();
$datos["nombre"]="Manolo";
$datos["email"]="manolo@gmail.com";
$datos["password"]="123445";
$usr->deleteById(1);
echo "<pre>";
var_dump($usr->getAll());
echo "</pre>";
exit;
*/



$ruta=isset($_GET["route"])?$_GET["route"]:"";
$route=new Router($ruta);
$route->run();


?>





