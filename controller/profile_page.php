<?php 
    $query = "SELECT * FROM users WHERE email='".$_SESSION['member']."'";
    $member = mysqli_fetch_array($connect->query($query));
 ?>