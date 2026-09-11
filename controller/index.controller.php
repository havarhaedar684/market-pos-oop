<?php
session_start();
include "../model/index.model.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $obj=new Index();
    $result=$obj->IndexUser($email, $password);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
    
    if($password==$row['password']){
     $_SESSION['name']=$row['name'];

     header("Location:show.controller.php");
     exit();
    }
    }
}
include "../view/index.view.php";

?>