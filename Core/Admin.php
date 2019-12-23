<?php

class Admin extends Main
{
    private $admin;
    public function __construct()
    {
        $this->admin = Session::get('admin');
        $this->conn = $this->DatabaseConnection();
    }

    public function getAdmin($key = false)
    {
        $admin = $this->find($this->admin['id'], 'user_tb', $this->conn);
        return $key == false ? $admin : $admin[$key];
    }

    public function updateAdmin()
    {
        $id = $this->admin['id'];
        $name = $this->clean($_POST['name'], $this->conn);
        $email = $this->clean($_POST['email'], $this->conn);
        $password = $this->clean($_POST['password'], $this->conn);
        $oldPassword = $this->clean($_POST['oldPassword'], $this->clean);
        $sql = "";
        if (sha1($oldPassword) == $this->admin['password'] && strlen($name) > 3 && strlen($password) >= 6) {
            $this->query("UPDATE admin_tb set name='$name',email='$email' AND password='sha1($password)' WHERE id='$id'", $this->conn);
        } else {
            return 0;
        }
    }
}
