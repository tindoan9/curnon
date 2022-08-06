<?php 
include "../model/database.php";
	$query="SELECT * FROM users";
	$result = $connect->query($query);

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$connect->query("DELETE FROM users WHERE id=$id");
		echo "<script>alert('Xóa người dùng thành công!'); location='login-admin_sbm.php?option=users'; </script>";
	}
 ?>
 <?php 
	$chuaXuLy=mysqli_num_rows($connect->query("SELECT * FROM orders WHERE status=1"));
	$dangXuLy=mysqli_num_rows($connect->query("SELECT * FROM orders WHERE status=2"));
	$daXuLy=mysqli_num_rows($connect->query("SELECT * FROM orders WHERE status=3"));
	$huy=mysqli_num_rows($connect->query("SELECT * FROM orders WHERE status=4"));

 ?>