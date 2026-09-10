<?php
include "Connection.php";
Class Show extends Database{
    public function ShowUser(){
        $sql="SELECT * FROM user";
        return mysqli_query($this->conn, $sql);
    }
}

?>