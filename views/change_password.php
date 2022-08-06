<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thây Đổi Mật Khẩu | OT</title>
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
    
    /*------fORM------*/
    .dangnhap{
        text-align: center;
        padding-top: 220px;
    }
    .boder{
        border-radius: 0px;
        background: #ffffff;
        box-shadow:  5px 5px 14px #858585,
                     -5px -5px 14px #ffffff;
        width: 600px;
        height: 500px;
        margin-left: 340px;
    }
    .boder>a{
        color: black;
        font-size: 13px;
        position: absolute;
        top: 525px;
        left: 770px;
    }
    .gmail>input{
        width: 450px;
        height: 50px;
        margin-bottom: 40px;
        margin-top: 60px;
    }
    .pass>input{
        width: 450px;
        height: 50px;
        margin-bottom: 50px;
    }
    .DN>button{
        background-color: black;
        color: aliceblue;
        padding-inline: 70px;
        height: 45px;
        margin-bottom: 30px;
    }
    .tao>a{
        background-color: white;
        color: black;
    }
    .end{
        text-align: center;
        margin-top: 90px;
    }
</style>
<body>
    <form class="dangnhap" action="../controller/change_sbm.php" method="post">
        <div class="boder">
            <div class="moi">
                <h3>THAY ĐỔI MẬT KHẨU</h3>
            </div>
            <div class="gmail">
                <input type="password" name="password_old" class="gmail" placeholder="Mật Khẩu Hiện Tại">
            </div>
            <div class="pass">
                <input type="password" name="password" placeholder="Mật Khẩu Mới" value>
            </div>
            <div class="DN">
                <button type="submit" name="sbm">Thay Đổi Mật Khẩu</button>
            </div>
        </div>
    </form>
</body>
</html>