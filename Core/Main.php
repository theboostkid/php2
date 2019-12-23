<?php
require_once '../Core/traits/query.php';
require_once '../Core/traits/session.php';
require_once '../Core/traits/validate.php';

class Main
{
    private $db = "127.0.0.1";
    private $host = "localhost";
    private $password = "";
    private $user = "root";
    private $conn = null;
    use Session;
    use Query;
    use Validate;

    public function __construct()
    {

    }

    public function DatabaseConnection()
    {
        $conn = mysqli_connect($this->host, $this->user, $this->password, $this->db);
        return $conn != false ? $conn : die();
    }

    public function clean($dirt, $conn)
    {
        return trim(htmlentities(mysqli_real_escape_string($conn, $dirt)));
    }

}
