<?php 
    include "./controller/watchchain_page.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thời trang đồng hồ nữ | OT</title>
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
    /*--------BGR---------*/
    .BGR {
        width: 100%;
        height: 534;
        margin-bottom: 120px;
    }
    .nam1{
        position: absolute;
        top: 300px;
        left: 60px;
    }
    /*-----San Pham-----*/
    .about-picture {
        position: relative;
    }
    .row{
        margin: 70px;
    }
    .col>p>i{
        font-size: 22px;
        position: absolute;
        top: 10px;
        left: 200px;
        opacity: 0;
    }
    .col:hover .bi,
    .col:active .bi{
        opacity: 1;
    }
    .col>p>img {
        width: 230px;
        margin-left: 15px;
        transform: scale(1.0);
        transition: all, 0.4s;
    }
    .col>a{
        position: absolute;
        top: 230px;
        left: 60px;
        font-size: 16px;
        background-color: black;
        color: aliceblue;
        padding: 5px;
        padding-inline: 25px;
        transform: translate(-20%);
        opacity: 0;
        transition: all, 0.4s;
    }
    .col>a:hover,
    .col>a:active{
        background-color: greenyellow;
    }
    .col>p>img:hover,
    .col>p>img:active{
        transform: scale(1.1);
    }
    .col:hover .picture-title,
    .col:active .picture-title{
        transform: translate(0);
        opacity: 1;
    }
    .tensp{
        transform: translate(0, -40%);
    }
    /*-----Dang Ki------*/
    .dangki{
        margin-top: 50px;
    }
    .hovaten{
        float: left;
        transform: translate(50%);
        margin: 20px;
    }
    .hovaten>input{
        width: 300px;
        height: 50px;
    }
    .dangki>button{
        transform: translate(70%, 50%);
        background-color: black;
        color: aliceblue;
        padding-inline: 70px;
        height: 45px;
    }
    .hovaten>select{
        height: 50px;
    }
    /*-----ket----*/
    .ket>img{
        width: 100%;
        margin-top: 80px;
    }
    .end{
        margin-top: 70px;
        padding-top: 30px;
        margin-left: 20px;
    }
    .momo{
        width: 70px;
    }
</style>
<body>
    <div class="nam1">
        <h1>DÂY ĐỒNG HỒ</h1>
        <p>MUA DÂY CHUYỀN CHO ĐỒNG HỒ CURNON CỦA BẠN</p>
    </div>
    <img class="BGR" src="./images/BGRDAY.webp" alt="OTin">
    <div class="row">
        <?php foreach ($result as $item): ?>
            <div class="col span-1-of-4 about-picture">
                <p><i class="bi bi-cart-plus"></i></p> 
                <p><img src="./images/<?=$item['image'] ?>" alt=""></p>
                <a class="picture-title" href="?option=productdetail&id=<?=$item['id']?>">XEM SẢN PHẨM</a>
                <p style="text-align: center;"><?=$item['name'] ?><br><?=number_format($item['price'],0,',','.' )?> ₫</p>
            </div>
        <?php endforeach; ?>
    </div>


    <div class="ket">
        <img src="./images/new2.png" alt="">
    </div>
    <form class="dangki">
        <h3>ĐĂNG KÍ NHẬN TIN MỚI</h3>
        <h6>Nhận các tin tức về chương trình và khuyến mãi sớm nhất</h6>
        <div class="hovaten">
            <input name="name" class="hoten" placeholder="Họ Tên" autocomplete="name">
            <select name="gender" class="gioitinh" placeholder="Giới tính" autocomplete="gender">
                <option value="female">Nữ</option>
                <option value="male">Nam</option>
                <option value="other">Khác</option>
            </select>
        </div>
        <div class="hovaten">
            <input name="email" class="gmail" placeholder="Email" autocomplete="email">
        </div>
        <button type="submit" class="DangKi">ĐĂNG KÍ</button>
    </form>
    <footer class="end">
        <b>&copy; 2019 - Bản quyền của CTCP PHÁT TRIỂN SẢN PHẨM SÁNG TẠO VIỆT</b>
        <p>Giấy chứng nhận ĐKKD số 0108150321 do Sở Kế hoạch và Đầu tư Thành phố Hà Nội cấp ngày <br> 29/01/2018 123C Thụy Khuê, Tây Hồ, Hà Nội.</p>
        <img class="momo" src="./images/momo.png" alt="">
        <img class="momo" src="./images/vnpay.png" alt="">
        <img src="./images/bct-5Sz.png" alt="">
    </footer>
</body>
</html>