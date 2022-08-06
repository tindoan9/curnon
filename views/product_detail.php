<?php 
    include "./controller/product_detail.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OT</title>
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
    /*-------------Logo--------------*/
    .menu>a>img {
        width: 90px;
        position: absolute;
        top: 10px;
        left: 585px;
    }
    /*-------san pham--------*/
    .container{
        padding-top: 110px;
    }
    .col>img{
        width: 550px;
        height: auto;
    }
    .col>p{
        margin-top: 30px;
        margin-bottom: -8px;
    }
    .thanhtoan{
        margin-top: 150px;
        background-color: black;
        color: aliceblue;
        padding-inline: 50px;
        height: 50px;
    }
    .col>p>i{
        font-size: 22px;
    }
    .chitiet{
        padding-top: 150px;
    }
    .chitiet>h4{
        margin-left: 50px;
    }
    .A{
        margin: 30px;
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
    .comment{
        float: right;
    }
    .viewcomment{
        background-color: #EEEEEE;
        padding: 5px;
        border-radius: 13px;
        margin-bottom: 20px;
    }
    .viewcomment i{
        float: right;
        font-size: 13px;
    }
    /*-----end----*/
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
    <div class="container">
        <div class="row">
            <div class="col span-1-of-2">
                <img src="./images/<?=$item['image'] ?>" alt="OT">
            </div>
            <div class="col span-1-of-2">
                <h1><?=$item['name'] ?></h1>
                <h5><?=number_format($item['price'],0,',','.' )?> ₫</h5>
                <!-- <span>0 đánh giá</span> -->
                <div class="star-ratings" title="0 Stars" style="position: relative; box-sizing: border-box; display: inline-block;">  
                </div>
                <p>Tình trạng:&nbsp;
                    <span style="display: inline-block; width: 8px; height: 8px; border-radius: 50%; background: rgb(34, 187, 34);"></span>
                    <span style="color: rgb(142, 231, 8);">Còn hàng</span>
                </p>
                <div class="row">
                    <div class="col span-1-of-2">
                        <button type="submit" class="thanhtoan">THANH TOÁN NGAY</button>
                    </div>
                    <div class="col span-1-of-2">
                        <button onclick="location='?option=cart&action=add&id=<?=$item['id']?>';" type="submit" class="thanhtoan"><i class="bi bi-bag-dash"></i> THÊM VÀO GIỎ</button>
                    </div>
                </div>
                <p><i class="bi bi-truck"></i> MIỄN PHÍ VẬN CHUYỂN</p>
                <p><i class="bi bi-shield-check"></i> BẢO HÀNH 10 NĂM, 1 ĐỔI 1 TRONG 3 NGÀY</p>
            </div>
        </div>
    </div>
    <div class="chitiet">
        <h4>CHI TIẾT THÔNG SÔ KĨ THUẬT</h4>
        <hr>
        <div class="row A">
            <div class="col span-1-of-2">
                <p><?=$item['description'] ?></p>
            </div>
            <div class="col span-1-of-2">
                <div class="comment">
                    <?php 
                        if(mysqli_num_rows($comments)==0){
                            echo "<section>Chưa có bình luận!</section>";
                        }else{
                            foreach ($comments as $comment) {
                    ?>
                    <div class="viewcomment">
                        <b><?=$comment['fullname']?></b>
                        <i><?=$comment['date']?></i>
                        <section><?=$comment['content']?></section>
                    </div>
                    <?php
                            }       
                        }
                     ?>
                    <form method="post">
                        <textarea name="content" cols="50" rows="1" class="form-control"></textarea><br>
                        <input type="submit" name="" value="Gửi" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
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