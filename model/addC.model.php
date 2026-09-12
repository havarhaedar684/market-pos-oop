<?php
include "Connection.php";
Class AddCategory extends Database{
    public function addCat($name, $status){
        $sql="INSERT INTO category(name,status) VALUES ('$name', '$status')";
        return mysqli_query($this->conn, $sql);

    }
}


?>