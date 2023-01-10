<?php
$folder_path=dirname($_SERVER["SCRIPT_NAME"]);
$host = 'localhost';
$dbname = 'academia';
$username = 'root';
$password = '';


define("URL_PATH",$folder_path);
define("HOST",$host);
define("DBNAME",$dbname);
define("DB_USER",$username);
define("DB_PASSWORD",$password);

// si quieres crear una nueva tabla en base de datos vas a usuarios php
//copias el codigo de arriba y cambias nombre usuario(tabla)por el nombre de la nueva 
//tabla creada