<?php

class Main
{
    private $db = "127.0.0.1";
    private $host = "localhost";
    private $password = "";
    private $user = "root";
    private $conn = null;
    use Session;

    public function __construct()
    {
        $this->conn = $this->DatabaseConnection();
    }

    public function DatabaseConnection()
    {
        $conn = mysqli_connect($this->host, $this->user, $this->password, $this->db);
        return $conn != false ? $conn : die();
    }

    public function clean($dirt)
    {
        return trim(htmlentities(mysqli_real_escape_string($this->conn, $dirt)));
    }

    public function query($sql, $type = "")
    {
        $qry = mysqli_query($this->conn, $this->clean($sql));
        switch ($type) {
            case 'assoc':
                return mysqli_fetch_assoc($qry);
                break;
            case 'all':
                return mysqli_fetch_all($qry, MYSQLI_ASSOC);
                break;
            default:
                return 1;
                break;
        }
    }

}
