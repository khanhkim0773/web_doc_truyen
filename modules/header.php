<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <div id="header">
        <ul id="navhead">
            <li><a href=""><img class="logo" src="assets/img/logo.png" alt="Logo"></a></li>
            <li> <input type="text"> <button class="menu search">Search</button></li>
            <form action="login-form.php">
                <li><button class="menu Log" name="btn_login">Đăng nhập</button></li>
            </form>
            <form action="signup-form.php" method="post">
                <li><button name="btn_sign" type="submit" class="menu Reg">Đăng kí</button></li>
            </form>
        </ul>
    </div>

    <div id="nav">
        <ul id="navSub">
            <li>
                <a class="nav type" href="">Thể loại</a>
                <ul class="subType">
                    <li><a href="">Novel</a></li>
                    <li><a href="">Comedy</a></li>
                    <li><a href="">Fantasy</a></li>
                </ul>
            </li>
            <li><a class="nav follow" href="">Theo dõi</a></li>
            <li><a class="nav history" href="">Lịch sử</a></li>
            <li><a class="nav upload" href="">Đăng truyện</a></li>
            <li><a class="nav notification" href="">Thông báo</a></li>
        </ul>
    </div>

    <div id="poster">
        <img src="assets/img/poster.png" alt="Hình ảnh không tồn tại">
    </div>

</body>

</html>