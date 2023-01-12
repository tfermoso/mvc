<?php

class LoginController
{
    public function index()
    {
        if (isset($_POST["user"])) {
            $db = new Database;
            $user = new User($db->getConnection());

            $username = $_POST["user"];
            $password = $_POST["password"];
            $data = $user->login($username, md5($password));

            if ($data) {
                session_start();
                $_SESSION["id_user"] = $data["id"];
                $_SESSION["username"] = $data["username"];
                header("Location: " . URL_PATH . "/admin");
                exit;
            } else {
                $error = "Wrong user/password combination";
            }
        }
        require_once(__DIR__ . "./../views/login.view.php");
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
            header("Location: " . URL_PATH . "/login");
            exit;
        }
        require_once(__DIR__ . "./../views/register.view.php");
    }

    public function logout()
    {
        session_destroy();
        header("Location: " . URL_PATH . "/login");
    }
}
