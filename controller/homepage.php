<?php 
    $query1 = "SELECT * FROM products WHERE status=1 LIMIT 4 OFFSET 0";
    $result1 = mysqli_query($connect, $query1);

    $query2 = "SELECT * FROM products WHERE status=0 LIMIT 4 OFFSET 0";
    $result2 = mysqli_query($connect, $query2);
 ?>