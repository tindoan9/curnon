<?php 
    $query = "SELECT * FROM products WHERE status=1 AND quantity>0";
    $result = mysqli_query($connect, $query);
 ?>