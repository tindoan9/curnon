<?php include "../controller/controll_orders.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản Lý Đơn Hàng | OT</title>
</head>
<style>
	.name{
		text-align: center;
	}
</style>
<body>
	<table class="table table-bordered">
		<h1 class="name">Quản Lý Đơn hàng <?=$status==1?'Chưa xử lý':($status==2?'Đang xử lý':($status==3?'Đã xử lý':'Hủy'))?></h1>
		<thead>
			<tr>
				<th>ID</th>
				<th>Tên</th>
				<th>Email</th>
				<th>Giá</th>
				<th>Số lượng</th>
				<th>Ngày Đặt Hàng</th>
				<th>Địa chỉ</th>
				<th>SĐT</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($result as $item):?>
				<tr>
					<td><?=$item['id']?></td>
					<td><?=$item['name']?></td>
					<td><?=$item['email']?></td>
					<td><?=number_format($item['price'],0,',','.' )?> ₫</td>
					<td><?=$item['number']?></td>
					<td><?=$item['ordate']?></td>
					<td><?=$item['address']?></td>
					<td><?=$item['mobile']?></td>
					<td><a class="btn btn-sm btn-info" href="../doc/order_detail.php?id=<?=$item['id']?>">Detail</a><a style="display: <?=$status==4?'':'none'?>;" class="btn btn-sm btn-danger" href="../controller/controll_orders.php?id=<?=$item['id']?>" onclick="return confirm('Are you sere')"> Delete</a></td>
				</tr>
			<?php
			endforeach;
			?>
		</tbody>
	</table>
</body>
</html>