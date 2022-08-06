<?php 
 if(empty($_SESSION['cart'])){
    $_SESSION['cart'] = array();
 }
 if(isset($_GET['action'])){
    $id = $_GET['id'];
    switch ($_GET['action']) {
        case 'add':
            if(array_key_exists($id, array_keys($_SESSION['cart']))){
                $_SESSION['cart'][$id]++;
            }else{
                $_SESSION['cart'][$id]=1;
            }
            header("location: ./?option=cart");
            break;
        case 'delete':
            unset($_SESSION['cart'][$id]);
            break;
        case 'update':
            if($_GET['type'] == 'asc')
                $_SESSION['cart'][$id]++;
            else
                if($_SESSION['cart'][$id]>1)
                    $_SESSION['cart'][$id]--;
            header("location: ?option=cart");
        break;
        case 'order':
            if(isset($_SESSION['member'])){
                header("location: ?option=ordersuccess");
            }else{
                header("location: ?option=login&order=1");
            }
        break;
    }
 }


  $query = "SELECT * FROM users WHERE email='".$_SESSION['member']."'";
  $member = mysqli_fetch_array($connect->query($query));

  if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $note = $_POST['note'];
    $ordermethodid = $_POST['ordermethodid'];
    $memberid = $member['id'];

    $query = "INSERT orders(ordermethodid,memberid,name,address,mobile,email,note) VALUES($ordermethodid,$memberid,'$name','$address','$mobile','$email','$note')";
    $connect->query($query);

    $query = "SELECT id FROM orders ORDER BY id DESC LIMIT 1";
    $orderid = mysqli_fetch_array($connect->query($query))['id'];
    foreach ($_SESSION['cart'] as $key=>$value) {
        $productid = $key;
        $number = $value;
        $query = "SELECT price FROM products WHERE id=$key";
        $price = mysqli_fetch_array($connect->query($query))['price'];
        $query = "INSERT orderdetail VALUES($productid,$orderid,$number,$price)";
        $connect->query($query);
        $query = "SELECT quantity FROM products WHERE id=$key";
        $quantity = mysqli_fetch_array($connect->query($query))['quantity'];
        $quantity_new = $quantity - $number;
        $query = "UPDATE products SET quantity = $quantity_new WHERE id = $productid";
        $connect->query($query);
    }
    unset($_SESSION['cart']);
    header("location: ?option=ordersuccess");


  }
 ?>
