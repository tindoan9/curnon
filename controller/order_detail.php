<?php 
	$order = $connect->query("SELECT * FROM users u JOIN orders o ON u.id=o.memberid JOIN products p JOIN orderdetail oddt ON p.id=oddt.productid WHERE  u.email='".$_SESSION['member']."'");
	
 ?>