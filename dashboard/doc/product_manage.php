<?php include "../controller/controll_products.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản Lý Sản Phẩm | OT</title>
</head>
<style>
	.name{
		text-align: center;
	}
</style>
<body>
	<table class="table table-bordered">
		<h1 class="name">Quản Lý Sản Phẩm</h1>
		<thead>
			<a href="?option=productadd" class="btn btn-success">Thêm Sản Phẩm</a>
			<tr>
				<th>ID</th>
				<th>Tên Sản Phẩm</th>
				<th>Ảnh</th>
				<th>Giá</th>
				<th>Số Lượng</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($result as $item):?>
				<tr>
					<td><?=$item['id']?></td>
					<td><?=$item['name']?></td>
					<td><img src="../images/<?=$item['image']?>" width="100px"></td>
					<td><?=number_format($item['price'],0,',','.' )?> ₫</td>
					<td><?=$item['quantity']?></td>
					<td><a class="btn btn-sm btn-info" href="../doc/product_update.php?id=<?=$item['id']?>">Update</a> <a class="btn btn-sm btn-danger" href="../controller/addproduct_sbm.php?id=<?=$item['id']?>" onclick="return confirm('Are you sere')"> Delete</a></td>
				</tr>
			<?php
			endforeach;
			?>
		</tbody>
	</table>
</body>
</html>