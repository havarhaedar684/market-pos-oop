<?php
include "../model/addC.model.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
$name=$_POST['category_name'];
$status=$_POST['status'];
$obj=new AddCategory();
$result=$obj->addCat($name, $status);
if($result){
    header("Location:category.controller.php");
    exit();
}

}
include "../view/addC.view.php";

?>