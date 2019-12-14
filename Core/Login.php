<?php

class Login extends Main
{
    public $conn;
    public function __construct()
    {
        $this->conn = $this->DatabaseConnection();
    }

    public function login()
    {
        $sql = "SELECT * FROM user_tb WHERE username='" . $_POST['username'] . "' AND password='" . sha1($_POST['password']) . "'";
        $res = $this->query($sql, 'assoc');
        if (!empty($res)) {
            $this->startUserSession($res);
        } else {
            return 0;
        }
    }

    public function startUserSession($user)
    {
        Session::setSession('user', $user);
        header('location:./');
    }
}
