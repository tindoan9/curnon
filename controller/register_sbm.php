<?php 
include '../model/database.php';
if(isset($_POST['sbm']) && $_POST["fullname"] != '' && $_POST["email"] != '' && $_POST["password"] != ''){
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $old = mysqli_query($connect, $sql);

    if(mysqli_num_rows($old) > 0){
        header("location: ../?option=register");
    }

    $sql = "INSERT INTO users (email,password,fullname) VALUES ('$email','$password','$fullname')";
    mysqli_query($connect, $sql);
    header("location: ../?option=login");
    
}

 ?>