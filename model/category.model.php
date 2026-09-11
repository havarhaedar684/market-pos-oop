<?php
include "Connection.php";
class Categories extends Database{
    public function CatItem(){
        $sql="SELECT * FROM category";
        return mysqli_query($this->conn, $sql);
    }
}
?>