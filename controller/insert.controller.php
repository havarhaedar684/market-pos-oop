<?php
include "../model/insert.model.php";
if($_POST){
 $name=$_POST['name'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $obj=new User();
 $result=$obj->InsertUser($name, $email, $password);
 if($result){
    header("Location:show.controller.php");
    exit();
 }
}
include "../view/insert.view.php";
?>