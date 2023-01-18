<?php

class ApiController
{

    public function index()
    {
        $db = new Database;
        $msg = new Message($db->getConnection());
        echo json_encode($msg->getAllAPI());
    }

    public function messages($id_user_destiny)
    {
        $db = new Database;
        $msg = new Message($db->getConnection());
        echo json_encode($msg->getAllByIdDestinyUserAPI($id_user_destiny));
    }

    public function newMessage()
    {
        $db = new Database;
        $msg = new Message($db->getConnection());
        $data = array();
        $data["id_user_origin"] = $_POST["id_user_origin"];
        $data["id_user_destiny"] = $_POST["id_user_destiny"];
        $data["message"] = $_POST["message"];
        $msg->insert($data);

        $response = array();
        $response["msg"] = "Sent message";
        echo json_encode($response);
    }

    public function delete($id)
    {
        $db = new Database;
        $msg = new Message($db->getConnection());
        $msg->deleteById($id);
        $response = array();
        $response["msg"] = "Message deleted";
        echo json_encode($response);
    }

    public function login()
    {
        $db = new Database;
        $usr = new User($db->getConnection());
        $logged = $usr->login($_POST["username"], md5($_POST["password"]));
        if ($logged) {
            $response["msg"] = "Access granted";
            $response["logged"] = true;
        } else {
            $response["msg"] = "Access denied";
            $response["logged"] = false;
        }
        echo json_encode($response);
    }
}
