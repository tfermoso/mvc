<?php
require_once("config.php");
require_once("router.php");
require_once("./Models/Database.php");
require_once("./Models/Orm.php");
require_once("./Models/usuarios.php");



$ruta=isset($_GET["route"])?$_GET["route"]:"";
$route=new Router($ruta);
$route->run();
