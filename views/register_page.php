<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/WebDangKy.css">
    <link rel="stylesheet" href="./css/Queries4.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo Tài Khoản | OT</title>
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
    h2,h6 {
        text-align: center;
    }
    a {
        text-decoration: none;
    }
   
    /*------fORM------*/
    .dangky{
        text-align: center;
        padding-top: 219px;
    }
    .boder{
        border-radius: -1px;
        background: #ffffff;
        box-shadow:  4px 5px 14px #858585,
                     -6px -5px 14px #ffffff;
        width: 599px;
        height: 499px;
        margin-left: 339px;
    }
    .ten>input{
        width: 449px;
        height: 49px;
        margin-bottom: 39px;
        margin-top: 29px;
    }
    .gmail>input{
        width: 449px;
        height: 49px;
        margin-bottom: 39px;
    }
    .pass>input{
        width: 449px;
        height: 49px;
        margin-bottom: 69px;
    }
    .eye{
        font-size: 20px;
        position: absolute;
        transform: translate(-35px, 10px);
    }
    .hidden{
        display: none;
    }
    .tao>button{
        background-color: black;
        color: aliceblue;
        padding-inline: 69px;
        height: 44px;
        margin-bottom: 49px;
    }
    .end{
        text-align: center;
        margin-top: 89px;
    }
</style>
<body> 
    <form class="dangky" action="./controller/register_sbm.php" method="post">
        <div class="boder">
            <div class="moi">
                <h3>MỚI ĐẾN CURNON?</h3>
                <p>Tạo tài khoản của bạn ngay bây giờ để kiếm được nhiều lợi ích</p>
            </div>
            <div class="ten">
                <input name="fullname" placeholder="Tên" autocomplete="Tên">
            </div>
            <div class="gmail">
                <input name="email" class="gmail" placeholder="Email" autocomplete="email">
            </div>
            <div class="pass">
                <input class="input" type="password" name="password" placeholder="Mật Khẩu" autocomplete="new-password" value><i class="bi bi-eye eye open hidden"></i><i class="bi bi-eye-slash eye close"></i>
            </div>
            <div class="tao">
                <button type="submit" name="sbm">TẠO TÀI KHOẢN</button>
            </div>
        </div>
    </form>
    <footer class="end">
        <hr>
        <b>&copy; 2019 - Bản quyền của CTCP PHÁT TRIỂN SẢN PHẨM SÁNG TẠO VIỆT</b>
        <p>Giấy chứng nhận ĐKKD số 0108150321 do Sở Kế hoạch và Đầu tư Thành phố Hà Nội cấp ngày <br> 29/01/2018 123C Thụy Khuê, Tây Hồ, Hà Nội.</p>
    </footer>
    <script>
        const input = document.querySelector(".input");
        const eyeopen = document.querySelector(".open");
        const eyeclose = document.querySelector(".close");
        eyeopen.addEventListener("click", function () {
           eyeopen.classList.add("hidden");
           eyeclose.classList.remove("hidden");
           input.setAttribute("type", "password");
        });
        eyeclose.addEventListener("click", function () {
           eyeopen.classList.remove("hidden");
           eyeclose.classList.add("hidden");
           input.setAttribute("type", "text");
        });
    </script>
</body>
</html>