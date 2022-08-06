<?php 
include "../model/database.php";
 	if(isset($_GET["id_order"])){
		$id = $_GET["id_order"];
		$query = "DELETE FROM `orders` WHERE `orders`.`id_order` = $id";
    	$result = mysqli_query($connect, $query);
    	//header("location: ../?option=orderdetail");
	}

	header("location: ../?option=orderdetail");
 ?>