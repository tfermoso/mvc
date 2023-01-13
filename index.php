<?php

use JetBrains\PhpStorm\ArrayShape;

require_once("config.php");
require_once("router.php");
require_once("./models/database.php");
require_once("./models/orm.php");
require_once("./models/user.php");
require_once("./models/message.php");
require_once("./controllers/controller.php");


$route = isset($_GET["route"]) ? $_GET["route"] : "";
$router = new Router($route);
$router->run();
