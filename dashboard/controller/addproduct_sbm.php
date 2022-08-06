<?php 
	include "../model/database.php";
	if(isset($_POST['name'])){
		 $name = $_POST['name'];
		 $query = "SELECT * FROM products WHERE name='$name'";
		 if(mysqli_num_rows($connect->query($query))!=0){
		 	$alert="Tên sản phẩm đã tồn tại!";
		}else{
			$name = $_POST['name'];
			$price = $_POST['price'];
			$image = $_POST['image'];
			$description = $_POST['description'];
			$quantity = $_POST['quantity'];
			$status = $_POST['status'];
			// xử lý ảnh
			$store = "../images/";
			$imageName = $_POST['image'];
			$imageTemp = $_POST['image'];
			$exp3 = substr($imageName, strlen($imageName)-3);
			$exp4 = substr($imageName, strlen($imageName)-4);
			if($exp3 == 'jpg' || $exp3 == 'png' || $exp3 == 'bmp' || $exp3 == 'gif' || $exp3 == 'JPG' || $exp3 == 'PNG' || $exp3 == 'BMP' || $exp3 == 'GIF' || $exp4 == 'jpeg' || $exp4 == 'webp' || $exp4 == 'WEBP' || $exp4 == 'png'){
				$imageName = time().'_'.$imageName;
				move_uploaded_file($imageTemp, $store.$imageName);
				$connect->query("INSERT products(name,price,image,quantity,description,status) VALUES('$name', $price, '$image', $quantity, '$description', $status)");
				header("location: ?option=products");
			}else{
				$alert="Ảnh không có trong thư mục!";
			}
		}
	}

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$connect->query("DELETE FROM products WHERE id=$id");
		echo "<script>alert('Xóa sản phẩm thành công!'); location='login-admin_sbm.php?option=products'; </script>";
	}
 ?>