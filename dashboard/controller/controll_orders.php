<?php 
include "../model/database.php";
	$status=$_GET['status'];
	$query = "SELECT * FROM orders JOIN orderdetail WHERE status=".$_GET['status'];
	$result=$connect->query($query);

	if (isset($_GET['id'])) {
		$id=$_GET['id'];
		$connect->query("DELETE FROM orderdetail WHERE orderid=$id");
		$connect->query("DELETE FROM orders WHERE id=$id");
		header("location: ?option=order&status=4");
	}
 ?>