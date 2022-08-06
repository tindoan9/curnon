<?php 
include '../model/database.php';
	if(isset($_POST['sbm']) && $_POST["fullname"] != '' && $_POST["email"] != '' && $_POST["mobile"] != '' && $_POST["address"] != ''){
    	$fullname = $_POST["fullname"];
    	$email = $_POST["email"];
    	$mobile = $_POST["mobile"];
		$address = $_POST["address"];


    	$sql = "UPDATE users SET fullname='$fullname', email='$email', mobile='$mobile', address='$address' WHERE email='$email'";
    	$user = mysqli_query($connect, $sql);
		header("location: ../?option=profile");
	}

 ?>