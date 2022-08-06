<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản Lý Người Dùng | OT</title>
</head>
<style>
	.name{
		text-align: center;
	}
</style>
<body>

	<table class="table table-bordered">
		<thead>
			<h1 class="name">Quản Lý người Dùng</h1>
			<tr>
				<th>ID user</th>
				<th>Tên Người Dùng</th>
				<th>Email</th>
				<th>SĐT</th>
				<th>Địa Chỉ</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($result as $item):?>
				<tr>
					<td><?=$item['id']?></td>
					<td><?=$item['fullname']?></td>
					<td><?=$item['email']?></td>
					<td><?=$item['mobile']?></td>
					<td><?=$item['address']?></td>
					<td><a class="btn btn-sm btn-danger" href="../controller/controll_users.php?id=<?=$item['id']?>" onclick="return confirm('Are you sere')">Delete</a></td>
				</tr>
			<?php
			endforeach;
			?>
		</tbody>
	</table>
</body>
</html>