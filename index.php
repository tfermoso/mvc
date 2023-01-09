<?php
require_once("router.php");


$ruta=isset($_GET["route"])?$_GET["route"]:"";
$route=new Router($ruta);
$route->run();

