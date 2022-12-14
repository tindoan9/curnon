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
                <h5 class="picture">?????NG H??? NAM</h5>
                <p><a href="?option=menwatch" class="picture">MUA NGAY <i class="bi bi-arrow-right-short"></i></a></p>
            </div>
            <div class="col span-1-of-3 about-picture">
                <img src="./images/bgrdaydonghoOTT.webp" alt="">
                <h5 class="picture">D??Y ?????NG H???</h5>
                <p><a href="?option=watchchain" class="picture">MUA NGAY <i class="bi bi-arrow-right-short"></i></a></p>
            </div>
            <div class="col span-1-of-3 about-picture">
                <img src="./images/donghonu.jpg" alt="">
                <h5 class="picture">?????NG H??? N???</h5>
                <p><a href="?option=ladieswatch" class="picture">MUA NGAY <i class="bi bi-arrow-right-short"></i></a></p>
            </div>
        </div>
    </div>
    <div class="banchay">
            <h3>DANH S??CH B??N CH???Y NH???T C???A NAM</h3>
            <h6><a href="?option=menwatch">KH??M PH?? TH??M</i></a></h6>
        <div class="row">
            <?php foreach ($result1 as $item): ?>
            <div class="col span-1-of-4 about-picture">
                    <p onclick="location='?option=cart&action=add&id=<?=$item['id']?>';"><i class="bi bi-cart-plus"></i></p> 
                    <p><img src="./images/<?=$item['image'] ?>" alt=""></p>
                    <a class="picture-title" href="?option=productdetail&id=<?=$item['id']?>">XEM S???N PH???M</a>
                    <p style="text-align: center;"><?=$item['name'] ?><br><?=number_format($item['price'],0,',','.' )?> ???</p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="banchay">
            <h3>DANH S??CH B??N CH???Y NH???T C???A N???</h3>
            <h6><a href="?option=ladieswatch">KH??M PH?? TH??M</i></a></h6>
        <div class="row">
            <?php foreach ($result2 as $item): ?>
                <div class="col span-1-of-4 about-picture">
                    <p><i onclick="location='?option=cart&action=add&id=<?=$item['id']?>';" class="bi bi-cart-plus"></i></p> 
                    <p><img src="./images/<?=$item['image'] ?>" alt=""></p>
                    <a class="picture-title" href="?option=productdetail&id=<?=$item['id']?>">XEM S???N PH???M</a>
                    <p style="text-align: center;"><?=$item['name'] ?><br><?=number_format($item['price'],0,',','.' )?> ???</p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="sanphancuachungtoi">
        <img src="./images/neww.jpg" alt="">
        <h3>S???N PH???M C???A CH??NG T??I</h3>
        <div class="row">
            <div class="col span-1-of-4 about-picture">
                <b>DESIGNED IN VIETNAM</b>
                <p>M???i chi???c ?????ng h??? Curnon ???????c thi???t k??? ph??t tri???n b???i ch???t x??m v?? n??? l???c c???a nh???ng con ng?????i Vi???t Nam, mang theo c???m h???ng v?? kh??t khao c???a tu???i tr???.</p>
            </div>
            <div class="col span-1-of-4 about-picture">
                <b>CH???NG N?????C TI??U CHU???N</b>
                <p>?????ng h??? Curnon s??? h???u t??nh n??ng ch???ng n?????c t??? 3ATM cho ?????n 10ATM, gi??p b???n t??? tin ho???t ?????ng ngay trong nh???ng m??i tr?????ng hay th???i ti???t kh??ng thu???n l???i.</p>
            </div>
            <div class="col span-1-of-4 about-picture">
                <b>K??NH SAPPHIRE CH???NG X?????C V?????T TR???I</b>
                <p>M???t k??nh Sapphire h???n ch??? t???i ??a x?????c x??t, x??a b??? n???i lo va ?????p, gi??p m???t ?????ng h??? lu??n s??ng b??ng.</p>
            </div>
            <div class="col span-1-of-4 about-picture">
                <b>THAY ?????I D??Y ??EO TRONG 30 GI??Y</b>
                <p>Thay d??y ?????ng h???, bi???n ?????i phong c??ch th???i trang c???a b???n m???i l??c m???i n??i trong t??ch t???c.</p>
            </div>
        </div>
    </div>
    <div class="story">
        <h3>THE STORY OF CURNON</h3>
        <p>Cu???i n??m 2016, 3 ch??ng trai ??am m?? Startup v?? ?????ng h??? quy???t ?????nh th??nh l???p Curnon, nh??ng <br> ngay t??? ?????u, ch??ng t??i ???? bi???t r???ng: Curnon sinh ra v???i m???t s??? m???nh l???n lao h??n, kh??ng ch??? <br> d???ng l???i l?? m???t th????ng hi???u ?????ng h???. Ch??ng t??i mu???n mang t???i m???t ngu???n c???m h???ng, m???t s??? <br> thay ?????i v??? t?? duy, v??? suy ngh?? v?? ch??nh nh???ng c??i ch??ng t??i g???i l?? tr???i nghi???m cho ng?????i tr???.</p>
        <img src="./images/iii.png" alt="">
    </div>
    <div class="ket">
        <img src="./images/new2.png" alt="">
    </div>
    <form class="dangki">
        <h3>????NG K?? NH???N TIN M???I</h3>
        <h6>Nh???n c??c tin t???c v??? ch????ng tr??nh v?? khuy???n m??i s???m nh???t</h6>
        <div class="hovaten">
            <input name="name" class="hoten" placeholder="H??? T??n" autocomplete="name">
            <select name="gender" class="gioitinh" placeholder="Gi???i t??nh" autocomplete="gender">
                <option value="female">N???</option>
                <option value="male">Nam</option>
                <option value="other">Kh??c</option>
            </select>
        </div>
        <div class="hovaten">
            <input name="email" class="gmail" placeholder="Email" autocomplete="email">
        </div>
        <button type="submit" class="DangKi">????NG K??</button>
    </form>
    <footer class="end">
        <b>&copy; 2019 - B???n quy???n c???a CTCP PH??T TRI???N S???N PH???M S??NG T???O VI???T</b>
        <p>Gi???y ch???ng nh???n ??KKD s??? 0108150321 do S??? K??? ho???ch v?? ?????u t?? Th??nh ph??? H?? N???i c???p ng??y <br> 29/01/2018 123C Th???y Khu??, T??y H???, H?? N???i.</p>
        <img class="momo" src="./images/momo.png" alt="">
        <img class="momo" src="./images/vnpay.png" alt="">
        <img src="./images/bct-5Sz.png" alt="">
    </footer>
    <script src="./js/mobile.js"></script>
</body>
</html>