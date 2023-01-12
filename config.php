<?php
// PATHS
$folder_path = dirname($_SERVER["SCRIPT_NAME"]);
define("URL_PATH", $folder_path);

// Database
$host = "localhost";
$dbname = "academia";
$dbuser = "root";
$dbpassword = "";

define("DB_HOST", $host);
define("DB_NAME", $dbname);
define("DB_USER", $dbuser);
define("DB_PASSWORD", $dbpassword);

define("PROJECT_NAME", "Jessmann");
