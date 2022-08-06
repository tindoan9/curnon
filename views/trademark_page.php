<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/Queries3.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thương hiệu | OT</title>
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
        height: 900px;
        margin-top: 70px;
        margin-bottom: 90px;
    }
    .th>h1 {
        position: absolute;
        top: 300px;
        left: 340px;
        color: aliceblue;
    }
    .th>h2 {
        position: absolute;
        top: 380px;
        left: 550px;
        font-size: 37px;
        color: aliceblue;
    }
    /*------why not----*/
    .col>video{
        width: 660px;
        height: auto;
        padding: 50px;
    }
    .col>h2{
        margin-top: 60px;
    }
    .col>img{
        margin-top: 20px;
    }
    /*------san pham-----*/
    .sanpham{
        text-align: center;
        margin-top: 170px;
    }
    .i{
        width: 90px;
    }
    .t{
        position: absolute;
        top: 2700px;
        left: 550px;
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
        <img class="BGR" src="./images/bgrthuonghieuOT.jpg" alt="OTin">
        <div class="th">
            <h1>Chào bạn, chúng tôi là CURNON!</h1>
            <h2>/cơ - nần/!</h2>
        </div>
    <div class="whynot">
        <div class="row">
            <div class="col span-1-of-2">
                <video controls><source src="./videos/vecurnon.mp4" type="video/mp4"></video>
            </div>
            <div class="col span-1-of-2">
                <h2>Why Not?</h2>
                <p>Đó là câu hỏi của chúng tôi khi bắt đầu. Và Curnon lựa chọn Đồng hồ - một sản phẩm phụ kiện không thể thiếu, một người bạn đồng hành để luôn sát cánh và là nguồn cảm hứng cho những người trẻ Việt trên hành trình chạm đến của giấc mơ của bản thân. Sau thành công ở Shark Tank mùa 2, cho đến giờ, chúng tôi tự hào vì sản phẩm của Curnon đã đồng hành cùng hàng chục ngàn bạn trẻ Việt Nam.</p>
                <div class="row">
                    <div class="col span-1-of-2">
                        <img src="./images/700.png" alt="">
                        <p>700% tốc độ tăng trưởng</p>
                    </div>
                    <div class="col span-1-of-2">
                        <img src="./images/700.png" alt="">
                        <p>20.000 khách hàng thân thiết</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sumenh">
        <div class="row">
            <div class="col span-1-of-2">
                <h2>SỨ MỆNH</h2>
                <p>"Tệp khách hàng mà Curnon hướng tới là thế hệ trẻ Millennials & Gen-Z, họ tôn trọng những giá trị thương hiệu. Với niềm tin vào sức mạnh tuổi trẻ Việt Nam, chúng tôi mang đến những sản phẩm, những biểu tượng tinh thần đầy cảm hứng để giúp họ thể hiện bản thân, để tự tin khám phá những tiềm năng và giá trị của chính bản thân mình."</p>
            </div>
            <div class="col span-1-of-2">
                <img class="o" src="./images/thuonghieu1.png" alt="">
            </div>
        </div>
    </div>
    <div class="sanpham">
        <h3>GIÁ TRỊ CỐT LÕI</h3>
        <p>Chúng tôi tin rằng cách tốt nhất để truyền tải được thông điệp “Tại sao không?” trước hết phải bắt đầu từ chính tập thể của Curnon</p>
        <div class="row">
            <div class="col span-1-of-3">
                <img class="i" src="./images/batdau.png" alt=""><br>
                <b>Bắt đầu và kết thúc bằng khách hàng</b>
                <p>Với tinh thần của những chiến binh, chúng tôi luôn chiến đấu với chính bản thân mình mỗi ngày để đem lại những trải nghiệm “WOW” nhất cho người trẻ Việt Nam.</p>
            </div>
            <div class="col span-1-of-3">
                <img class="i" src="./images/damlam.png" alt=""><br>
                <b>Dám nghĩ, dám làm</b>
                <p>Với khát khao trở thành người đồng hành của các bạn, chúng tôi tin rằng chính mình phải có đủ can đảm để vượt qua thách thức, dám nghĩ, dám dẫn đầu và khác biệt.</p>
            </div>
            <div class="col span-1-of-3">
                <img class="i" src="./images/truyen.png" alt=""><br>
                <b>Truyền cảm hứng</b>
                <p>Tương lai với chúng tôi là những sản phẩm vươn tầm thế giới, là thế hệ trẻ Việt Nam đầy tự tin để theo đuổi đam mê của mình, là "Why not?" trở thành triết lí của tất cả mọi người.</p>
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