<?php 
session_start();
include '../model/database.php';
	if(isset($_POST['sbm']) && $_POST["email"] != '' && $_POST["password"] != ''){
		$fullname = $_POST["fullname"];
		$email = $_POST["email"];
    	$password = $_POST["password"];

    	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password' AND status=1";
    	$user = mysqli_query($connect, $sql);

    	if(mysqli_num_rows($user) > 0){
    		// $_SESSION['member'] = $email;
    		// $_SESSION['admin'] = $status; 
    		header("location: ./doc/index.html");
    	}
    		//else{
    	// 	header("location: ..");
    	// }
	}

 ?>