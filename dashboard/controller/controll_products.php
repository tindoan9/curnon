<?php 
include "../model/database.php";
	$query="SELECT * FROM products";
	$result = $connect->query($query);

	// if (isset($_GET['id'])) {
	// 	$id = $_GET['id'];
	// 	$connect->query("DELETE FROM users WHERE id=$id");
	// 	echo "<script>alert('Xóa người dùng thành công!'); location='login-admin_sbm.php?option=users'; </script>";
	// }
 ?>