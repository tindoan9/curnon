<?php 
session_start();
include '../model/database.php';
	if(isset($_POST['sbm']) && $_POST["email"] != '' && $_POST["password"] != ''){
		$email = $_POST["email"];
    	$password = $_POST["password"];

    	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    	$user = mysqli_query($connect, $sql);
    	$result = mysqli_fetch_array($user);
    	if(mysqli_num_rows($user) > 0){
    		$_SESSION['member'] = $email;
    		if(isset($_GET['order'])){
    			header("location: ../?option=ordersuccess");
    		}elseif($_GET['productid']){
    			$memberid = $result['id'];
    			$productid = $_GET['productid'];
    			$content = $_SESSION['content'];
    			$connect->query("INSERT comments(memberid,productid,date,content) VALUES($memberid,$productid,now(),'$content')");
            	echo "<script>alert('Bình luận thành công!'); location='?option=productdetail&id=$productid';</script>";
    		}else{
    			header("location: ../?option=home");
    		}
    	}else{
    		echo "Sai email hoặc password";
    	}
	}

 ?>
 