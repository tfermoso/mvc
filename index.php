<?php

use JetBrains\PhpStorm\ArrayShape;

require_once("config.php");
require_once("router.php");
require_once("./models/database.php");
require_once("./models/orm.php");
require_once("./models/user.php");


$route = isset($_GET["route"]) ? $_GET["route"] : "";
$router = new Router($route);
$router->run();

/*
$db = new Database;
$user = new User($db->getConnection());*/

// INSERT
/*$data = array();
$data["username"] = "manolo";
$data["email"] = "manolo@jessmann.com";
$data["password"] = "5678";

$user->insert($data);*/

// UPDATE
/*$id = 2;
$data = array();
$data["username"] = "manoli";
$data["email"] = "manoli@jessmann.com";
$data["password"] = "5678";

$user->updateById($id, $data);*/

// DELETE by id
/*$id = 2;

$user->deleteById($id);*/

// SELECT *
//var_dump($user->getAll());

// SELECT by id
//var_dump($user->getById(2));
