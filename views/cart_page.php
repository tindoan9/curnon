<?php 
    include "./controller/cart_action.php";
 ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng | OT</title>
</head>
<style>
    * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    }
    html {
        font-family: 'Josefin Slab', serif;
        color: #5a5a5a;
        background-color: white;
        text-rendering: optimizeLegibility;
    }
    h3,h6 {
        text-align: center;
    }
    a {
        text-decoration: none;
    }
    body{
        overflow-x: hidden;
    }
   /*---Form------*/
    .product{
        padding-top: 110px;
    }
    .form p b{
        color: rgb(142, 218, 28);
    }
   /* .col{
        padding: 90px;
        margin: -50px;
    }*/
    .form input{
        width: 590px;
        height: 50px;
        margin: 10px;
    }
    .form button{
        margin: 20px;
        transform: translate(25%);
        background-color: rgb(0, 0, 0);
        color: aliceblue;
        padding-inline: 150px;
        height: 45px
    }
    .order-method{
        float: right;
        margin: 20px;
    }
    /*---------product1------*/
    .product1{
        border-radius: 1px 1px;
    }
    .cart{
        padding-left: 30px;
    }
    .product1>img{
        display: inline-block;    
        width: 100px;
        position: relative;
        top: 40px;
        left: 20px;
        
    }
    .name-product{
        position: relative;
        top: 40px;
        left: 20px;
    }
    .price{
        float: right;
        position: relative;
        top: 75px;
        right: 20px;
    }
    .view-quantity{
        width: 30px;
        position: relative;
        top: 40px;
        left: 175px;
    }
    .sum{
        float: right;
    }
    .del{
        background-color: white;
        position: relative;
        left: 40px;
        top: -20px;
        border: 0;
    }
    .desc{
        width: 25px;
        position: relative;
        top: 40px;
        left: 180px;
    }
    .asc{
        width: 25px;
        position: relative;
        top: 40px;
        left: 170px;
    }
    /*-----------------------------------*/
    /*-------gio hang-------*/
    .giohang{
        padding-top: 250px;
        text-align: center;
    }
    .row>img{
        width: 200px;
        transform: translate(600%);
        transition: all, 1s;
    }
    .mua{
        color: black;
    }
    .row:hover .di,
    .row:active .di{
        transform: translate(260%);
    }
    /*------------------*/
    /*-----end------*/
    .end{
        padding-top: 50px;
        text-align: center;
    }
</style>
<body>
    <div class="product">
        <div class="row">
            <div class="col span-1-of-2 product1">
                <?php if(!empty($_SESSION['cart'])):
                    $ids = "0";
                    foreach(array_keys($_SESSION['cart']) as $key)
                    $ids.=",".$key;
                    // $ids = implode(',', array_keys($_SESSION['cart']));
                    $query = "SELECT * FROM products WHERE id in($ids)";
                    $result = $connect->query($query);
                    $toTal=0;
                    ?>
                    <h4 class="cart">ĐƠN HÀNG</h4>
                    <?php
                    foreach ($result as $item):
                 ?>
                <button onclick="location='?option=cart&action=delete&id=<?=$item['id']?>';" class="del"><i class="bi bi-x-circle"></i></button>
                <img src="./images/<?=$item['image']?>" alt="OT">
                <span class="name-product"><?=$item['name']?></span>
                <input class="desc" type="button" name="" value="-" onclick="location='?option=cart&action=update&type=desc&id=<?=$item['id']?>';">
                <input class="view-quantity" type="" name="" value="<?=$_SESSION['cart'][$item['id']]?>"> 
                <input class="asc" type="button" name="" value="+" onclick="location='?option=cart&action=update&type=asc&id=<?=$item['id']?>';">

                <p class="price"><?=number_format($supTotal=$item['price']*$_SESSION['cart'][$item['id']],0,',','.' )?> ₫</p><br><br>
                <?php $toTal+=$supTotal; ?>
                <?php
                    endforeach;
                ?>
                <b class="sum">Tổng Tiền: <?=number_format($toTal,0,',','.')?> ₫</b>
            </div>
            <div class="col span-1-of-2 form">
                <h4>THÔNG TIN KHÁCH HÀNG</h4>
                <p>Phương thức vận chuyển là <b>FREESHIP</b> với đơn hàng từ 700.000 ₫.</p>
                <form method="post">
                    <input name="name" class="hoten" placeholder="Họ Tên" value="<?=$member['fullname']?>">
                    <input name="email" class="hoten" placeholder="Email" value="<?=$member['email']?>">
                    <input name="mobile" class="hoten" placeholder="Số điện thoại" value="<?=$member['mobile']?>">
                    <input name="address" class="hoten" placeholder="Địa chỉ nhập hàng" value="<?=$member['address']?>">
                    <?php 
                        $query = "SELECT * FROM ordermethod WHERE status";
                        $result = $connect->query($query);
                     ?>
                    <label>Ghi chú</label><br><textarea name="note" cols="30" rows="3"></textarea>
                    <select class="order-method" name="ordermethodid">
                        <?php foreach ($result as $item): ?>
                            <option value="<?=$item['id']?>"><?=$item['name']?></option>
                        <?php endforeach; ?>
                    </select>
                    <button onclick="location='?option=cart&action=order'">ĐẶT HÀNG</button>
                </form>
                <p>*Lưu ý: Curnon sẽ liên lạc lại với bạn trong 24h để xác nhận đơn hàng.</p>
                <b>HOTLINE: 0702676...</b>
            </div>
        </div>
        <?php
    else:
        ?>
        <div class="giohang">
        <div class="row">
            <img class="di" src="./images/GioHang.png" alt="OT">
            <h3>Không có sản phẩm nào trong giỏ hàng của bạn ^-^</h3>
            <a class="mua" href="?option=menwatch">Tiếp tục mua sắm</a>
        </div>
    </div>
        <?php
                    endif; 
                ?>
    </div>
    <footer class="end">
        <hr>
        <b>&copy; 2019 - Bản quyền của CTCP PHÁT TRIỂN SẢN PHẨM SÁNG TẠO VIỆT</b>
        <p>Giấy chứng nhận ĐKKD số 0108150321 do Sở Kế hoạch và Đầu tư Thành phố Hà Nội cấp ngày <br> 29/01/2018 123C Thụy Khuê, Tây Hồ, Hà Nội.</p>
    </footer>
</body>
</html>