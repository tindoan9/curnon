<?php 
	include "../model/database.php";
	if(isset($_POST['input'])){
		$input = $_POST['input'];
		$query = "SELECT * FROM products WHERE name LIKE '%{$input}%'";
		$result = mysqli_query($connect, $query);
		if(mysqli_num_rows($result) > 0){?>
			<div style="background: white; width: 400px; height: auto; position: relative; top: 70px; left: 750px;">
				<?php 
					while ($row = mysqli_fetch_assoc($result)) {
						$image = $row['image'];
						$name = $row['name'];
						$price = $row['price'];
					?>
						<a href="?option=productdetail&id=<?=$row['id']?>"><img src="./images/<?php echo $image; ?>" style="width: 75px; height: 85px; display: inline-block;" />
						<b style="position: relative; top: -25px; color: black;"><?php echo $name; ?></b>
						<span  style="position: relative; left: -60px; color: black;"><?php echo number_format($price,0,',','.' ); ?> ₫</span></a><hr>
					<?php
					}
					?>
			</div>						
<?php
		}else{
			echo "<b>No data Found</b>";
		}
	}
 ?>	