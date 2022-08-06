<?php 
include "../model/database.php";
	if(isset($_POST['sbm'])){
		//id = $_GET['id'];
		$password_old = $_POST["password_old"];
    	$password = $_POST["password"];
    	$sql = "SELECT * FROM users WHERE password='$password_old'";
    	//$pass = $sql['password'];
    	$row = mysqli_query($connect, $sql);
		$result = mysqli_num_rows($row);
		if($result>0){
			$query = mysqli_query($connect,"UPDATE users SET password='$password'");
			echo "<script>alert('Đổi mật khẩu thành công!'); location='../?option=profile'; </script>";
		}else{
			echo "<script>alert('Đổi mật khẩu không thành công, vui lòng nhập lại!'); location='../views/change_password.php'; </script>";
		}
	}

 ?>