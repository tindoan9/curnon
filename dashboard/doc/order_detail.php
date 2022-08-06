<?php include "../controller/controll_order-detail.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chi tiết đơn hàng</title>
</head>
<style>
	.name{
		text-align: center;
	}
</style>
<body>
	<h1 class="name">Chi Tiết Đơn Hàng <br>(Mã Đơn Hàng: <?=$order['id']?>)</h1>
	<h2>Ngày đặt hàng</h2>
	<p><?=$order['ordate']?></p>
	<h2>Thông tin người đặt hàng</h2>
	<table class="table table-bordered">
		<tbody>
			<tr>
				<td>Họ Tên:</td>
				<td><?=$order['fullname']?></td>
			</tr>
			<tr>
				<td>Số Điện Thoại:</td>
				<td><?=$order['mobilemember']?></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><?=$order['emailmember']?></td>
			</tr>
			<tr>
				<td>Địa Chỉ:</td>
				<td><?=$order['addressmember']?></td>
			</tr>
			<tr>
				<td>Ghi chú:</td>
				<td><?=$order['note']?></td>
			</tr>
		</tbody>
	</table>
	<h2>Thông tin người nhận hàng</h2>
	<table class="table table-bordered">
		<tbody>
			<tr>
				<td>Họ Tên:</td>
				<td><?=$order['fullname']?></td>
			</tr>
			<tr>
				<td>Số Điện Thoại:</td>
				<td><?=$order['mobile']?></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><?=$order['email']?></td>
			</tr>
			<tr>
				<td>Địa Chỉ:</td>
				<td><?=$order['address']?></td>
			</tr>
		</tbody>
	</table>
	<h2>Phương thức thanh toán</h2>
	<p><?=$order['nameordermethod']?></p>
	
	 <form method="post">
		<h2>Các sản phẩm đặt mua</h2>
		<?php $count=1 ?>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>STT</th>
					<th>Tên sản phẩm</th>
					<th>Ảnh</th>
					<th>Giá</th>
					<th>Số lượng</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($orderdetails as $item): ?>
					<tr>
						<td><?=$count++?></td>
						<td><?=$item['name']?></td>
						<td><img src="../images/<?=$item['image']?>" width="150px"></td>
						<td><?=number_format($item['price'],0,',','.' )?> ₫</td>
						<td><?=$item['number']?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<h2>Trạng thái đơn hàng</h2>
		<p style="display: <?=$order['status']==2 || $order['status']==3?'none':'block'?>;"><input type="radio" name="status" value="1" <?=$order['status']==1?'checked':''?>>Chưa xử lý</p>
		<p style="display: <?=$order['status']==3?'none':''?>;"><input type="radio" name="status" value="2" <?=$order['status']==2?'checked':''?>>Đang xử lý</p>
		<p><input type="radio" name="status" value="3" <?=$order['status']==3?'checked':''?>>Đã xử lý</p>
		<p style="display: <?=$order['status']==3?'none':''?>;"><input type="radio" name="status" value="4" <?=$order['status']==4?'checked':''?>>Hủy</p>
		<section>
			<input <?=$order['status']==3?'disabled':''?> type="submit" name="" value="Update đơn hàng" class="btn btn-primary">
		</section>
<!-- 		<section class="form-group">
			<a href="?option=order&status=1" class="btn btn-outline-secondary">&lt;&lt; Back</a>
		</section> -->
	</form>
</body>
</html>