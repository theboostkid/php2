<?php
require_once '../Core/Main.php';

class AdminLogin extends Main
{
    public function adminLogin()
    {
        $email = $_POST['email'];
        $password = sha1($_POST['password']);
        $sql = "SELECT * FROM admins WHERE email='$email' AND password='$password'";
        $res = $this->query($sql, 'assoc');
        if (!empty($res)) {
            $this->setAdminSession($res);
        }
    }

    public function setAdminSession($admin)
    {
        Session::put("admin", $admin);
        header('location:../admin/');
    }
}
