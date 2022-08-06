<?php 
	session_start();
    include "./model/database.php";
    $query = "SELECT * FROM users";
    $result = mysqli_query($connect, $query);
    $item = mysqli_fetch_array($result);
 ?>