<?php
include "../model/show.model.php";
$obj=new Show();
$result=$obj->ShowUser();
include "../view/show.view.php";


?>