<?php 
    include "./controller/profile_page.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">        
        <link rel="stylesheet" href="./css/Profile.css">
        <title>Document</title>
</head>
<style>
    *{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }
    body{
        background: #fff;
    }

    a{
        text-decoration: none;
        color: black;
    }
    .account_sidebar{
        position: relative;
        top: 200px;
        left: 50px;
    }
    .account_infor{
        position: relative;
        right: 50px;
        top: 200px;
    }
    .account_sidebar h1{
        padding: 20px;
    }
    .account_menu a{
        margin-left: 20px;
    }
    .menu_1{
        width: 100%;
        height: 10px;
        padding: 6px 180px 6px 10px;
        border: 1px solid #000;
        border-radius: 15px;
    }
    .menu_2{
        position: relative;
        top:  25px;
        width: 100%;
        height: 10px;
        padding: 6px 180px 6px 10px;
        border: 1px solid #000;
        border-radius: 15px;
    }
    .menu_3{
        position: relative;
        top: 50px;
        width: 100%;
        height: 10px;
        padding: 6px 270px 6px 10px;
        border: 1px solid #000;
        border-radius: 15px;
    }
    .account_infor h2{
        display: inline-block;
        padding: 20px;
    }
    .infor p{
        padding: 10px;
    }
    .input_1{
        position: relative;
        left: 100px;
        width: 400px;
        height: 40px;
        padding: 5px 10px 6px 20px;
        border: 1px solid rgb(116, 114, 114);
        border-radius: 15px;
        outline: none;
    }
    .input_2{
        position: relative;
        left: 110px;
        width: 400px;
        height: 40px;
        padding: 5px 10px 6px 20px;
        border: 1px solid rgb(129, 129, 129);
        border-radius: 15px;
        outline: none;
    }
    .input_3{
        position: relative;
        left: 52px;
        width: 400px;
        height: 40px;
        padding: 5px 10px 6px 20px;
        border: 1px solid rgb(116, 114, 114);
        border-radius: 15px;
        outline: none;
    }
    .input_4{
        position: relative;
        left: 100px;
        width: 400px;
        height: 40px;
        padding: 5px 10px 6px 20px;
        border: 1px solid rgb(116, 114, 114);
        border-radius: 15px;
        outline: none;
    }
    .infor button{
        position: relative;
        top: 35px;
        left: 170px;
        background: rgb(35, 37, 179);
        color: #fff;
        padding: 15px 30px;
        border-radius: 30px;
    }
    .list.active{
        background-color: #000;
        color: #fff;
    }
    .end{
        text-align: center;
        margin-top: 350px;
    }
</style>
<body>
    <div class="containers">
        <div class="row">
            <div class="account_sidebar col span-1-of-3">
                <h1><?=$_SESSION['member']?></h1>
                <div class="account_menu">
                    <div class="list">
                        <a class="menu_1" href="?option=orderdetail">Đơn hàng của bạn</a><br>
                    </div>
                    <div class="list">
                        <a class="menu_2" href="./views/change_password.php?id=<?=$member['id']?>">Thay đổi mật khẩu</a><br>
                    </div>
                    <div class="list">
                        <a class="menu_3" href="?option=logout">Thoát</a>
                    </div>
                </div>
            </div>
            <div class="account_infor col span-2-of-3">
                <h2>Thông tin tài khoản</h2>
                <div class="infor">
                    <form action="./controller/update_profile_sbm.php" method="post">
                        <p>Họ Tên <input class="input_1" type="text" name="fullname" value="<?=$member['fullname']?>" ></p>
                        <p>Email <input class="input_2" type="text" name="email" value="<?=$member['email']?>"></p>
                        <p>Số Điện thoại <input class="input_3" type="text" name="mobile" value="<?=$member['mobile']?>"></p>
                        <p>Địa chỉ <input class="input_4" type="text" name="address" value="<?=$member['address']?>"></p>
                        <button name="sbm">Cập nhật tài khoản</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="end">
        <hr>
        <b>&copy; 2019 - Bản quyền của CTCP PHÁT TRIỂN SẢN PHẨM SÁNG TẠO VIỆT</b>
        <p>Giấy chứng nhận ĐKKD số 0108150321 do Sở Kế hoạch và Đầu tư Thành phố Hà Nội cấp ngày <br> 29/01/2018 123C Thụy Khuê, Tây Hồ, Hà Nội.</p>
    </footer>
    <!-- <script>
	    let list = document.querySelectorAll('.list');
	    for(let i=0; i<list.length; i++){
		    list[i].onclick = function(){
			let j = 0;
			while(j < list.length){
				list[j++].className = 'list';
			}
			list[i].className = 'list active';
		    }
	    }
    </script> -->
</body>
</html>