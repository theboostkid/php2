<?php

trait Validate
{
    public function InUseEmail($email, $conn)
    {
        $sql = "SELECT * FROM user_tb WHERE email='$email'";
        $qry = mysqli_query($conn, $sql);
        $res = mysqli_fetch_assoc($qry);
        return empty($res) ? 0 : 1;
    }

    public function sanitize($dirt, $conn)
    {
        return trim(htmlentities(mysqli_real_escape_string($conn, $dirt)));
    }
}
