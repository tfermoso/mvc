<?php

class LoginController
{
    public function index()
    {
        if (isset($_POST["user"])) {
            echo "Recibiendo Login";
        } else {
            require_once(__DIR__ . "./../views/login.view.php");
        }
    }

    public function register()
    {
        if (isset($_POST["user"])) {
            $db = new Database;
            $user = new User($db->getConnection());
            $data = array();
            $data["username"] = $_POST["user"];
            $data["email"] = $_POST["email"];
            $data["password"] = md5($_POST["password"]);
            $user->insert($data);

            echo "Usuario registrado correctamente";
            header("Location: ");
        }
        require_once(__DIR__ . "./../views/register.view.php");
    }
}
