<?php
include "../model/category.model.php";
$obj=new Categories();
$result=$obj->CatItem();

include "../view/category.view.php";

?>