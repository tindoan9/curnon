<?php include "../controller/controll_users.php"; ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Hện Thống Quản Trị | OT</title>
 </head>
 <style>
	.tbl-admin td>section{
		margin-top: 20px;
	}
</style>
 <body>
 	<table class="table table-bordered tbl-admin">
	<tbody>
		<tr>
			<td width="15%" height="150px">Hello: <?=$_SESSION['admin']?><br> [<a href="?option=logout">Logout</a>]</td>
			<td align="center">ADMIN CONTROLPANEL</td>
		</tr>
		<tr>
			<td width="20%">
				<section><a href="?option=users">>> Quản lý người dùng</a></section>
				<section><a href="?option=products">>> Quản lý sản phẩm</a></section>
				<section>
					>> Quản lý đơn hàng
					<section><a href="?option=order&status=1">&nbsp;&nbsp;&nbsp;>> Chưa xử lý [<span style="color: red;"><?=$chuaXuLy?></span>]</a></section>
					<section><a href="?option=order&status=2">&nbsp;&nbsp;&nbsp;>> Đang xử lý [<span style="color: red;"><?=$dangXuLy?></span>]</a></section>
					<section><a href="?option=order&status=3">&nbsp;&nbsp;&nbsp;>> Đã xử lý [<span style="color: red;"><?=$daXuLy?></span>]</a></section>
					<section><a href="?option=order&status=4">&nbsp;&nbsp;&nbsp;>> Đơn hàng hủy [<span style="color: red;"><?=$huy?></span>]</a></section>	
				</section>
			</td>
			<td>
				<?php 
					if (isset($_GET['option'])) {
						switch ($_GET['option']) {
							case 'logout':
								unset($_SESSION['admin']);
								header("location: ..");
								break;
							case 'users':
								include "../doc/users_manage.php";
								break;
							case 'products':
								include "../doc/product_manage.php";
								break;
							case 'productadd':
								include "../doc/add-product.php";
								break;
							case 'order':
								include "../doc/orders_manage.php";
								break;
							case 'productupdate':
								include "../doc/product_update.php";
								break;
							case 'orderdetail':
								include "../doc/order_detail.php";
								break;
							default:
								// code...
								break;
						}
					}
				 ?>
			</td>
		</tr>
	</tbody>
</table>
 </body>
 </html>

