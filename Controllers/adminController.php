<?php

class AdminController{
    public function index(){
        require_once(__DIR__.'./../Views/admin.view.php');

 }
    public function ver(){
        echo "Hola desde admin de admin";


}
}