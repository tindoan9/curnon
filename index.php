 <?php 
 	include "./controller/controller.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/menu.css">
    <title>Đồng Hồ Thời Trang | OT</title>
</head>
<body>
    <header>
        <ul class="menu">
            <li class="khampha">Khám phá
                <ul class="KP">
                    <li><a href="?option=menwatch">ĐỒNG HỒ NAM</a></li>
                    <li><a href="?option=ladieswatch">ĐỒNG HỒ NỮ</a></li>
                    <li><a href="?option=watchchain">DÂY ĐỒNG HỒ</a></li>
                </ul>
            </li>
            <li class="thuongh"><a href="?option=trademark">Về CORNON</a></li>
            <a href="?option=home"><img src="./images/logo-mWb.svg" alt="OT"></a>           
            <li class="TK"><i class="bi bi-person"></i>
                <ul class="tk">
                    <?php if(empty($_SESSION['member'])): ?>
                        <li><a href="?option=login">ĐĂNG NHẬP</a></li>
                        <li><a href="?option=register">ĐĂNG KÝ</a></li>
                        <li><a href="./dashboard/index.php">HỆ THỐNG CURNON</a></li>
                    <?php else: ?>
                        <li><a href="?option=profile&id=<?=$item['id']?>">THÔNG TIN CÁ NHÂN</a></li>
                        <li><a href="?option=logout">THOÁT</a></li>    
                    <?php endif; ?>
                </ul>
            </li>
            <a href="?option=cart" style="color: black;"><li class="gh"><i class="bi bi-bag-dash"></i></li></a>
            <li class="search"><i class="bi bi-search search_icon"></i></li>
            <div class="search_input">
                <input class="search_controll" id="live_search" autocomplete="off" placeholder=" Tìm kiếm sản phẩm..." type="text" name="">
            </div>
            <div id="searchresult"></div>
        </ul>
    </header>
    <?php 
        if(isset($_GET['option'])){
            switch ($_GET['option']) {
                case 'home':
                    include "./views/homepage.php";
                    break;
                case 'login':
                    include "./views/login_page.php";
                    break;
                case 'register':
                    include "./views/register_page.php";
                    break;
                case 'logout':
                    if(isset($_SESSION['member'])){
                        session_destroy();
                    }
                    header("location: ?option=home");
                    break;
                case 'profile':
                    include "./views/profile_page.php";
                    break;
                case 'menwatch':
                    include "./views/menwatch_page.php";
                    break;
                case 'productdetail':
                    include "./views/product_detail.php";
                    break;
                case 'ladieswatch':
                    include "./views/ladieswatch_page.php";
                    break;
                case 'watchchain':
                    include "./views/watchchain_page.php";
                    break;
                case 'cart':
                    include "./views/cart_page.php";
                    break;
                case 'trademark':
                    include "./views/trademark_page.php";
                break;
                case 'ordersuccess':
                    include "./views/order_success.php";
                break;
                case 'orderdetail':
                    include "./views/order_detail.php";
                break;
                default:
                    // code...
                    break;
            }
        }
     ?>
    <script>
        const icon = document.querySelector('.search_icon');
        const search = document.querySelector('.search_input');
        icon.onclick = function(){
            search.classList.toggle('active');
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#live_search").keyup(function(){
                var input = $(this).val();   
                if(input != ""){
                    $.ajax({
                        url:"./views/livesearch.php",
                        method:"post",
                        data:{input},

                        success:function(data){
                            $("#searchresult").html(data);
                        }
                    });
                }else{
                    $("#searchresult").css("display", "none");
                }
            });
        });
    </script>
</body>
</html>
