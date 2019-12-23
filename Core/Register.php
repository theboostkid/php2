<?php
require_once '../Core/Main.php';

class Register extends Main
{
    public function __construct()
    {
        $this->conn = $this->DatabaseConnection();
    }

    public function register()
    {
        $firstName = $this->sanitize($_POST['firstName'], $this->conn);
        $lastName = $this->sanitize($_POST['lastName'], $this->conn);
        $gender = $this->sanitize($_POST['gender'], $this->conn);
        $birthday = $this->sanitize($_POST['dob'], $this->conn);
        $countryOfBirth = $this->sanitize($_POST['countryOfBirth'], $this->conn);
        $profileImg = "hello.png";
        $address = $this->sanitize($_POST['address'], $this->conn);
        $phone = $this->sanitize($_POST['phone'], $this->conn);
        $email = $this->sanitize($_POST['email'], $this->conn);
        $username = $this->sanitize($_POST['username'], $this->conn);
        $password = sha1($this->sanitize($_POST['password'], $this->conn));
        if ($this->InUseEmail($email, $this->conn) == 1) {
            $sql = "INSERT INTO user_tb(firstName,lastName,gender,dob,countryOfBirth,profileImg,address,phone,email,username,password) VALUES('$firstName','$lastName','$gender','$birthday','$countryOfBirth','$profileImg','$address','$phone','$email','$username','$password');";
            $res = $this->query($sql, $this->conn);
            if ($res == 1) {
                return 1;
            } else {
                return 0;
            }
        } else {
            Session::put('registerFailed', 'User registration failed,the email ' . $email . ' is already in use.');
        }

    }
}
