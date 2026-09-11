<?php
include "Connection.php";
class Index extends Database{
    public function IndexUser($email, $password){
        $sql="SELECT * FROM user where email='$email' AND password='$password'";
        return mysqli_query($this->conn, $sql);
    }
}

?>