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
        require_once(__DIR__ . "./../views/register.view.php");
    }
}
