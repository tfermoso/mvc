
<?php

class AdminController extends controller

{
    private $mensajes;
    public function __construct()

    {   
        $conn = new Database();
        $msj = new Mensajes($conn->getConnection());
        $this->mensajes=$msj->getAllByIdUserDestino($_SESSION["idusuario"]);
        
    }
    public function index()
    {
        $user_name = $_SESSION["nombre"];
        $conn = new Database();
        $msj = new Mensajes($conn->getConnection());
        $mensajes=$msj->getAllByIdUserDestino($_SESSION["idusuario"]);
        $this->render("Admin/admin",Array(),"Admin/layout/admin");
    }
    public function nuevomensaje()
    {
        if (isset($_POST["usr_destino"])) {
        
            $conn = new Database();
            $usr = new Mensajes($conn->getConnection());
            $datos=array();
            $datos["id_usuario_origen"]=$_SESSION["idusuario"];
            $datos["id_usuario_destino"]=$_POST["usr_destino"];
            $datos["mensaje"]=$_POST["mensaje"];
            $usr->insertar($datos);
            header("Location:".URL_PATH."/admin");
        } else {
            $user_name = $_SESSION["nombre"];
            $conn = new Database();
            $usr = new Usuarios($conn->getConnection());
            $usuarios = $usr->getAllLessMe($_SESSION["idusuario"]);
            $options = "";
            foreach($usuarios as $key => $value) {
                $options .= "<option value=" . $value['id'] . ">" . $value['nombre'] . "</option>";
            }
            require_once(__DIR__ . './../Views/admin_nuevomensaje.view.php');
        }
    }
}









?>