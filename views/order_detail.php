<?php 
	include "./controller/order_detail.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style>
	*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
	}
	.orderdetail{
		position: relative;
		top: 200px;
		left: 310px;
		background-color: #EEEEEE;
		width: 700px;
		height: 100px;
		border-radius: 10px;
		display: inherit;
		padding: 20px;
		margin-bottom: 5px;
	}
	.orderdetail img{
		width: 80px;
		float: left;
	}
	.orderdetail i{
		position: relative;
		top: -70px;
		left: 400px;
	}
	.orderdetail a{
		position: relative;
		top: -70px;
		left: 450px;
	}
	.orderdetail h6{
		position: relative;
		top: -40px;
		left: -50px;
	}
	.orderdetail span{
		position: relative;
		top: -10px;
		left: 200px;
	}
	.orderaddress{
		position: relative;
		top: 200px;
		left: 310px;
		background-color: #EEEEEE;
		width: 700px;
		height: 80px;
		border-radius: 10px;
		display: inherit;
		padding: 5px;
		margin-bottom: 5px;
	}
	.orderaddress .home{
		color: white;
		background-color: orangered;
		padding: 5px;
		margin: 5px;
		border-radius: 10px;
	}
	.cancelorder{
		position: relative;
		top: 140px;
		left: 923px;
		border: none;
		padding: 20px 24px;
		border-radius: 5px;
		background-color: #FF1818;
		color: white;
	}
</style>
<body>
	<?php 
        if(mysqli_num_rows($order)==0){
            echo "<script>alert('Bạn chưa có đơn hàng nào!'); location='?option=profile'; </script>";
        }else{
            foreach ($order as $od) {
    ?>
	<div class="orderdetail">
		<img src="./images/<?=$od['image']?>" alt="OT">
		<p><?=$od['name']?></p>
		<h6><?=number_format($od['price'],0,',','.' )?> ₫</h6>
		<i>Qty: <?=$od['number']?></i>
		<a href="?option=productdetail&id=<?=$od['id']?>">Viết đánh giá</a>
		<span>Time order: <?=$od['ordate']?></span>
	</div>
	<div class="orderaddress">
		<b><?=$od['fullname']?></b><br>
		<b class="home">Address</b><i><?=$od['address']?></i>
		<p><?=$od['mobile']?></p>
	</div><br><br>	
	<!-- <a href="./controller/order_delete.php?id=<?=$od['id']; ?>" class="cancelorder">Hủy</a> -->
	<?php 
		}
	}
	 ?>
</body>
</html>