<?php 
include './controller/homepage.php'; 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page | OTin</title>
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
    /*--------BGR---------*/
    .BGR {
        width: 100%;
        height: 666px;
        margin-top: 30px;
        margin-bottom: 90px;
    }
    /*-----San Pham-----*/
    .about-picture {
        position: relative;
    }
    .row {
        text-align: center;
        padding: 90px;
        margin-bottom: 90px;
    }
    .col>img {
        width: 300px;
        height: 200px;
    }
    .col>h5 {
        position: absolute;
        top: 80px;
        left: 110px;
        color: white;
    }
    .col>p>a{
       position: absolute;
       top: 160px;
       left: 140px;
       color: white;
       transition: all, 0.4s;
    }
    .col>p>a:hover,
    .col>p>a:after{
        transform: scale(1.1);
    }
    /*------San Pham Ban Chay Nam, Nu--------*/
    .col>p>i{
        font-size: 22px;
        position: absolute;
        top: -50px;
        left: 210px;
        opacity: 0;
    }
    .col:hover .bi,
    .col:active .bi{
        opacity: 1;
    }
    .col>p>img {
        width: 230px;
        margin-top: -90px;
        transform: scale(1.0);
        transition: all, 0.4s;
    }
    .col>a{
        position: absolute;
        top: 180px;
        left: 55px;
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
        color: white;
        transform: translate(0);
        opacity: 1;
    }
    .banchay>h6>a{
        color: black;
    }
    .banchay>h6>a:hover {
        text-decoration: underline;
    }
    /*-----Rivier Chung Thoi--------*/

    .sanphancuachungtoi>img {
        width: 100%;
        border-radius: 100%;
    }
    .sanphancuachungtoi>h3 {
        margin-bottom: -50px;
    }
    .col>p,b {
        text-align: left;
        padding: 9px;
    }
    /*-----story-----*/
    .story{
        text-align: center;
    }
    .story>img{
        width: 100%;
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
    <img class="BGR" src="./images/chinh2.jpg" alt="OTin">
    <div class="SanPham">
        <div class="row">
            <div class="col span-1-of-3 about-picture">
                <img src="./images/donghonam.jpg" alt="">
                <h5 class="picture">ĐỒNG HỒ NAM</h5>
                <p><a href="?option=menwatch" class="picture">MUA NGAY <i class="bi bi-arrow-right-short"></i></a></p>
            </div>
            <div class="col span-1-of-3 about-picture">
                <img src="./images/bgrdaydonghoOTT.webp" alt="">
                <h5 class="picture">DÂY ĐỒNG HỒ</h5>
                <p><a href="?option=watchchain" class="picture">MUA NGAY <i class="bi bi-arrow-right-short"></i></a></p>
            </div>
            <div class="col span-1-of-3 about-picture">
                <img src="./images/donghonu.jpg" alt="">
                <h5 class="picture">ĐỒNG HỒ NỮ</h5>
                <p><a href="?option=ladieswatch" class="picture">MUA NGAY <i class="bi bi-arrow-right-short"></i></a></p>
            </div>
        </div>
    </div>
    <div class="banchay">
            <h3>DANH SÁCH BÁN CHẠY NHẤT CỦA NAM</h3>
            <h6><a href="?option=menwatch">KHÁM PHÁ THÊM</i></a></h6>
        <div class="row">
            <?php foreach ($result1 as $item): ?>
            <div class="col span-1-of-4 about-picture">
                    <p onclick="location='?option=cart&action=add&id=<?=$item['id']?>';"><i class="bi bi-cart-plus"></i></p> 
                    <p><img src="./images/<?=$item['image'] ?>" alt=""></p>
                    <a class="picture-title" href="?option=productdetail&id=<?=$item['id']?>">XEM SẢN PHẨM</a>
                    <p style="text-align: center;"><?=$item['name'] ?><br><?=number_format($item['price'],0,',','.' )?> ₫</p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="banchay">
            <h3>DANH SÁCH BÁN CHẠY NHẤT CỦA NỮ</h3>
            <h6><a href="?option=ladieswatch">KHÁM PHÁ THÊM</i></a></h6>
        <div class="row">
            <?php foreach ($result2 as $item): ?>
                <div class="col span-1-of-4 about-picture">
                    <p><i onclick="location='?option=cart&action=add&id=<?=$item['id']?>';" class="bi bi-cart-plus"></i></p> 
                    <p><img src="./images/<?=$item['image'] ?>" alt=""></p>
                    <a class="picture-title" href="?option=productdetail&id=<?=$item['id']?>">XEM SẢN PHẨM</a>
                    <p style="text-align: center;"><?=$item['name'] ?><br><?=number_format($item['price'],0,',','.' )?> ₫</p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="sanphancuachungtoi">
        <img src="./images/neww.jpg" alt="">
        <h3>SẢN PHẨM CỦA CHÚNG TÔI</h3>
        <div class="row">
            <div class="col span-1-of-4 about-picture">
                <b>DESIGNED IN VIETNAM</b>
                <p>Mỗi chiếc Đồng hồ Curnon được thiết kế phát triển bởi chất xám và nỗ lực của những con người Việt Nam, mang theo cảm hứng và khát khao của tuổi trẻ.</p>
            </div>
            <div class="col span-1-of-4 about-picture">
                <b>CHỐNG NƯỚC TIÊU CHUẨN</b>
                <p>Đồng hồ Curnon sở hữu tính năng chống nước từ 3ATM cho đến 10ATM, giúp bạn tự tin hoạt động ngay trong những môi trường hay thời tiết không thuận lợi.</p>
            </div>
            <div class="col span-1-of-4 about-picture">
                <b>KÍNH SAPPHIRE CHỐNG XƯỚC VƯỢT TRỘI</b>
                <p>Mặt kính Sapphire hạn chế tối đa xước xát, xóa bỏ nỗi lo va đập, giúp mặt đồng hồ luôn sáng bóng.</p>
            </div>
            <div class="col span-1-of-4 about-picture">
                <b>THAY ĐỔI DÂY ĐEO TRONG 30 GIÂY</b>
                <p>Thay dây đồng hồ, biến đổi phong cách thời trang của bạn mọi lúc mọi nơi trong tích tắc.</p>
            </div>
        </div>
    </div>
    <div class="story">
        <h3>THE STORY OF CURNON</h3>
        <p>Cuối năm 2016, 3 chàng trai đam mê Startup và Đồng hồ quyết định thành lập Curnon, nhưng <br> ngay từ đầu, chúng tôi đã biết rằng: Curnon sinh ra với một sứ mệnh lớn lao hơn, không chỉ <br> dừng lại là một thương hiệu đồng hồ. Chúng tôi muốn mang tới một nguồn cảm hứng, một sự <br> thay đổi về tư duy, về suy nghĩ và chính những cái chúng tôi gọi là trải nghiệm cho người trẻ.</p>
        <img src="./images/iii.png" alt="">
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
    <script src="./js/mobile.js"></script>
</body>
</html>