<?php
include "Connection.php";
class User extends Database{
    public function InsertUser($name, $email, $password){
    $sql="INSERT INTO user (name, email, password)VALUES ('$name', '$email' ,'$password')";
    return mysqli_query($this->conn,$sql);
    }
}

?>