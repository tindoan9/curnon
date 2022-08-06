<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/Form.css">
	<title>Đăng Nhập Hệ Thống | OT</title>
</head>
<body>
	<div class="container">
		<h1>Hệ Thống CURNON</h1>
		<form action="./controller/login-admin_sbm.php" method="post">
			<div class="form-control">
				<input type="text" name="username" required>
				<label for="">Username</label>
				<!-- <label for="">
					<span style="transition-delay: 0ms;">E</span>
					<span style="transition-delay: 50ms;">m</span>
					<span style="transition-delay: 100ms;">a</span>
					<span style="transition-delay: 150ms;">i</span>
					<span style="transition-delay: 200ms;">l</span>
				</label> -->
			</div>
			<div class="form-control">
				<input type="password" name="password" required>
				<label for="">Password</label>
			</div>
			<button name="sbm" class="btn">Login</button>
			<p class="text">Don't have an account? <a href="#">Register</a></p>
		</form>
	</div>

	<script src="./js/Form.js"></script>
</body>
</html>