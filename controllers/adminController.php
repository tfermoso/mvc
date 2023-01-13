<?php
class AdminController
{
    public function index()
    {
        $db = new Database;
        $msg = new Message($db->getConnection());
        $messages = $msg->getAllByIdDestinyUser($_SESSION["id_user"]);

        require_once(__DIR__ . "./../views/admin.view.php");
    }

    public function newmessage()
    {
        if (isset($_POST["destiny_user"])) {
            $db = new Database;
            $msg = new Message($db->getConnection());
            $data = array();
            $data["id_user_origin"] = $_SESSION["id_user"];
            $data["id_user_destiny"] = $_POST["destiny_user"];
            $data["message"] = $_POST["message"];
            $msg->insert($data);
            header("Location: " . URL_PATH . "/admin");
        } else {
            $db = new Database();
            $user = new User($db->getConnection());
            $users = $user->getAllBut($_SESSION["id_user"]);
            $options = "";
            foreach ($users as $key => $value) {
                $options .= "<option value=" . $value['id'] . ">" . $value['username'] . "</option>";
            }
        }

        require_once(__DIR__ . "./../views/adminNewMessage.view.php");
    }
}
