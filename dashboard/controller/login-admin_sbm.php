<?php 
	session_start();
	include "../model/database.php";
	if (isset($_POST['username'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
		$result = $connect->query($query);
		if(mysqli_num_rows($result) == 0){
			echo "<script>alert('Sai tên đăng nhập hoặc mật khẩu!'); location='../index.php'; </script>";
		}else{
			$result = mysqli_fetch_array($result);
			if ($result['status']==0) {
				echo "<script>alert('Tài khoản đã bị khóa!'); location='../index.php'; </script>";
			}else{
				$_SESSION['admin']=$username;
				header("Refresd:0");
			}
		}
	}

	if (isset($_SESSION['admin'])) {
		include "../doc/admincontrolpanel.php";
	}else{
		include "../index.php"; 
	}
	
 ?>