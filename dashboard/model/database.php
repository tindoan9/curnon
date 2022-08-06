<?php
// $connect2 = new PDO("mysql:host=localhost;dbname=qlemail", 'root', '');
$connect = mysqli_connect('localhost', 'root', '', 'doanphp');
if(!$connect){
		echo "Connection Failed" . mysqli_connect_error();
	}
?>