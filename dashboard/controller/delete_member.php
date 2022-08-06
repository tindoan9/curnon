<?php 
include "../model/database.php";
if(isset($_GET["id"])){
		$id = $_GET["id"];
	}
	
	$sql = "DELETE FROM users WHERE id = $id";
	$qr = mysqli_query($connect, $sql);
	header("location: ./..?option=users");
 ?>