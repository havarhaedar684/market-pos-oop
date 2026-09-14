<?php
include "Connection.php";
class Supplier extends Database{
    public function SupItem(){
    $sql="SELECT * FROM supplier";
    return mysqli_query($this->conn, $sql);
    } 
}


?>