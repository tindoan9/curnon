<?php 
include "../model/database.php";
	$query="SELECT a.fullname,a.mobile AS 'mobilemember',a.address AS 'addressmember',a.email AS 'emailmember',b.*,c.name AS 'nameordermethod' FROM users a JOIN orders b ON a.id=b.memberid JOIN ordermethod c ON b.ordermethodid=c.id WHERE b.id=".$_GET['id'];
	$order=mysqli_fetch_array($connect->query($query));

	if (isset($_POST['status'])) {
		$connect->query("UPDATE orders SET status=".$_POST['status']." WHERE id=".$_GET['id']);  
		header("Refresh:0");
	}

 ?>
 <?php 
		$query="SELECT b.number,b.price,c.name,c.image FROM orders a JOIN orderdetail b ON a.id=b.orderid JOIN products c ON b.productid=c.id WHERE a.id=".$order['id'];
		$orderdetails = $connect->query($query);
	 ?>