<?php
class AdminController extends Controller
{
    private $messages;

    public function __construct()
    {
        $db = new Database;
        $msg = new Message($db->getConnection());
        $this->messages = $msg->getAllByIdDestinyUser($_SESSION["id_user"]);
    }

    public function index()
    {
        $params = array();
        $params["messages"] = $this->messages;

        $this->render("admin/admin", $params, "admin/layout/admin");
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
            $params=array();
            $params["messages"]=$this->messages;
            $params["options"]=$options;
            $params["users"]=$users;

            $this->render("admin/adminNewMessage", $params, "admin/layout/admin");
        }

        
    }
}
