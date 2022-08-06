<?php 
    // xử lý comment
    if(isset($_POST['content'])){
        $content = $_POST['content'];
        $productid = $_GET['id'];
        if(isset($_SESSION['member'])){
            $memberid = mysqli_fetch_array($connect->query("SELECT * FROM users WHERE email='".$_SESSION['member']."'"));
            $memberid = $memberid['id'];
            $connect->query("INSERT comments(memberid,productid,date,content) VALUES($memberid,$productid,now(),'$content')");
            echo "<script>alert('Bình luận thành công!')</script>";
        }else{
            $_SESSION['content']=$content;
            echo "<script>alert('Bạn cần đăng nhập để bình lận!'); location='?option=login&productid=$productid'; </script>";
        }
    }
    // hiển thị comment
    $comments = $connect->query("SELECT * FROM users u JOIN comments c ON u.id=c.memberid JOIN products p ON c.productid=p.id WHERE  productid=".$_GET['id']);

    $id = $_GET['id'];
    $query = "SELECT * FROM products WHERE id = $id";
    $result = mysqli_query($connect, $query);
    $item = mysqli_fetch_array($result);

    
 ?>