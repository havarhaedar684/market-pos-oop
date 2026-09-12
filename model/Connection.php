<?php
Class Database{
   
        public $a="localhost";
        public $b="root";
        public $c="";
        public $d="market_oop";
        public $conn;
public function __construct(){
    $this->Connection_Database();
}
public function Connection_Database(){
    $this->conn=mysqli_connect(
    $this->a,
    $this->b,
    $this->c,
    $this->d
   );
   date_default_timezone_set('Asia/Baghdad');
   
    }
}
$obj=new Database();



?>