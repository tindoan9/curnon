<?php 
include "../controller/controll_update-product.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="../ckeditor/ckeditor.js"></script>
	<title>Update Sản Phẩm | OT</title>
</head>
<style>
	.name{
		text-align: center;
	}
</style>
<body>
	<h1 class="name">Update Sản Phẩm</h1>
	<section style="color: red; font-weight: bold; text-align: center;"><?=isset($alert)?$alert:''?></section>
	<section class="container col-md-6">
	<form method="post">
		<section class="form-group">
			<label>Tên sản phẩm:</label><input type="" name="name" class="form-control" value="<?=$product['name']?>">
		</section>
		<section class="form-group">
			<label>Giá:</label><input type="number" name="price" class="form-control" value="<?=$product['price']?>">
		</section>
		<section class="form-group">
			<label>Số lượng:</label><input type="number" name="quantity" class="form-control" value="<?=$product['quantity']?>">
		</section>
		<section class="form-group">
			<label>Ảnh:</label><br>
			<img src="../images/<?=$product['image']?>" width="200px">
			<input type="file" name="image" class="form-control">
		</section>
		<section class="form-group">
			<label>Danh mục:</label><br>
			<span><input type="radio" value="1" name="status"> Đồng hồ nam</span><br>
			<span><input type="radio" value="0" name="status"> Đồng hồ nữ</span><br>
			<span><input type="radio" value="2" name="status"> Dây đồng hồ</span>
		</section>
		<section class="form-group">
			<label>Mô tả:</label>
			<textarea name="description"><?=$product['description']?></textarea>
			<script>CKEDITOR.replace("description");</script>
		</section>
		<section class="form-group">
			<input type="submit" value="Update" class="btn btn-primary"><a href="?option=products" class="btn btn-outline-secondary">&lt;&lt; Back</a>
		</section>
	</form>
</section>
</body>
</html>