<?php
Class Database{
   
        public $a="localhost";
        public $b="root";
        public $c="";
        public $d="market_oop";
        public $conn;
public function Connection_Database(){
    $this->conn=mysqli_connect(
    $this->a,
    $this->b,
    $this->c,
    $this->d
   );
   if($this->conn){
    echo "You have a connection";
   }else{
    echo "You dont have a connection";
   }
   return $this->conn;
    }
}
$obj=new Database();
$obj->Connection_Database();


?>