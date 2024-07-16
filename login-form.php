<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng nhập</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            width: 100%;
            height: 100vh;
            background-color: #f2f3f5;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #login {
            padding: 90px 75px;
            background-color: #fff;
            width: 100%;
            max-width: 500px;
            border-radius: 20px;
        }

        #login .login-title {
            font-size: 35px;
            color: #373941;
            text-align: center;
            cursor: pointer;
            margin-bottom: 20px;
        }

        #login .login-label {
            font-size: 16px;
            color: #373941;
            display: inline-block;
            cursor: pointer;
            margin-bottom: 4px;
        }

        #login .login-input {
            width: 100%;
            padding: 12px;
            margin-bottom: 16px;
            border: none;
            background-color: #f2f3f5;
            border-radius: 20px;
        }

        #login .re-login-ckb {
            margin-bottom: 16px;
        }

        #login .login-btn {
            display: block;
            margin: 0 auto;
            width: 50%;
            border: none;
            padding: 12px;
            border-radius: 20px;
            color: white;
            background-color: #5d9c59;
            cursor: pointer;
            margin-bottom: 16px;
        }

        #login .login-btn:hover {
            background-color: #e96479;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        #login .or {
            text-align: center;
            font-size: 12px;
            position: relative;
        }

        #login .or:after {
            content: "";
            width: 100%;
            height: 1px;
            background-color: black;
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
        }

        #login .or span {
            display: inline-block;
            padding: 12px;
            background-color: #fff;
            position: relative;
            z-index: 2;
            margin-bottom: 25px;
        }

        #login .login-with .login-with-btn {
            display: block;
            margin: 0 auto;
            width: 70%;
            margin-bottom: 16px;
            padding: 8px;
            border-radius: 20px;
            border: none;
            background-color: #439a97;
            color: white;
            cursor: pointer;
        }

        #login .login-with .login-with-btn:hover {
            background-color: #e96479;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        #login .no-accout-label {
            text-align: center;
        }
    </style>
</head>

<body>

    <form action="" method="post">
        <div id="login">
            <h1 class="login-title">Đăng nhập</h1>

            <label class="login-label" for="fullname">Tên đăng nhập</label>
            <input name = "username" type="text" id="fullname" class="login-input" placeholder="Tên đăng nhập">

            <label class="login-label" for="password">Mật khẩu</label>
            <input name = "password" type="pasword" id="password" class="login-input" placeholder="Mật khẩu">

            <input class="re-login-ckb" type="checkbox"> <span class="re-login">Ghi nhớ đăng nhập</span>

            <button name = "login_btn" class="login-btn">Đăng nhập</button>

            <div class="or"> <span>Hoặc</span> </div>

            <div class="login-with">
                <button class="login-with-btn">Đăng nhập với Google</button>
                <button class="login-with-btn">Đăng nhập với Facebook</button>
            </div>

            <div class="no-accout-label">Bạn chưa có tài khoản? <a href="signup-form.php">Đăng kí</a> </div>

        </div>
    </form>

    <?php
    require "db/connect.php";

    if (isset($_POST['login_btn'])) {
        //echo "Submit";
        $username = $_POST['username'];
        $pass = $_POST['password'];

        if (!empty($username) && !empty($pass)) {
            //echo "<pre>";
            //print_r($_POST);
            $sql = "SELECT taikhoan, matkhau from taikhoandb";
            $result = $conn->query($sql);
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                echo "{$row['taikhoan']} - {$row['matkhau']}";
                echo "<pre>";

                if ($username == $row['taikhoan'] && $pass == $row['matkhau']) {
                    // echo "Dung tk, mat khau";
                    // echo "<pre>";
    ?>
                    <form action="index.php" method="post"></form>
    <?php
                }
                else
                    echo "Tài khoản hoặc mật khẩu không chính xác!";
            }
        } else
            echo "Nhập đầy đủ thông tin!";
    } 
    // else
    //     echo "Failed!";
    $conn->close();
    ?>
</body>

</html>