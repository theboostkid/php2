<?php
require_once '../Core/Main.php';

class User extends Main
{
    public $conn;
    public function __construct()
    {
        $this->conn = $this->DatabaseConnection();
        $this->user = Session::get('user');
    }

    public function user($key = 0)
    {
        $user = $this->find($this->user['id'], 'user_tb', $this->conn);
        return $key == 0 ? $user : $user[$key];
    }

    public function delete()
    {
        $this->destroy($this->user['id'], 'user_tb', $this->conn);
        Session::remove('user');
        header('location:../');
    }
}
