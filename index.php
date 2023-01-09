<?php
require_once("config.php");
require_once("router.php");

$route = isset($_GET["route"]) ? $_GET["route"] : "";
$router = new Router($route);
$router->run();
