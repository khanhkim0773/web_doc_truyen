<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>

    <style>
      * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
        font-family: "Arial", sans-serif;
      }

      body {
        width: 100%;
        height: 100vh;
        background-color: #f2f3f5;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      #reg {
        padding: 90px 75px;
        background-color: #fff;
        width: 100%;
        max-width: 500px;
        border-radius: 20px;
      }

      #reg .signup-title {
        font-size: 35px;
        font-weight: bold;
        color: #373941;
        text-align: center;
        margin-bottom: 20px;
      }

      #reg .singnup-label {
        font-size: 16px;
        color: #373941;
        margin-bottom: 4px;
        display: inline-block;
        cursor: pointer;
      }

      #reg .signup-input {
        display: block;
        width: 100%;
        padding: 12px;
        border-radius: 20px;
        background-color: #f2f3f5;
        outline: none;
        border: 0;
        font-size: 12px;
        margin-bottom: 14px;
      }

      #reg .or {
        text-align: center;
        font-size: 16px;
        position: relative;
        margin-bottom: 10px;
      }

      #reg .or:after {
        content: "";
        width: 100%;
        height: 1px;
        background-color: black;
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
      }

      #reg .or span {
        display: inline-block;
        padding: 10px 30px;
        background-color: #fff;
        position: relative;
        z-index: 2;
      }

      #reg .signup-with {
        padding: 8px 8px;
        border-radius: 20px;
        outline: none;
        border: none;
        background-color: #57c5b6;
        color: white;
        cursor: pointer;
        margin-left: 28px;
        margin-bottom: 14px;
      }

      #reg .signup-with:hover,
      #reg .signup-btn:hover {
        background-color: #e96479;
        color: black;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      }

      #reg .signup-btn {
        display: block;
        padding: 12px;
        margin: 0 auto;
        width: 50%;
        border-radius: 20px;
        border: none;
        margin-bottom: 16px;
        background-color: #5d9c59;
        color: white;
        font-size: 20px;
        cursor: pointer;
      }

      #reg .login {
        margin: 0 auto;
        width: 70%;
      }
    </style>
  </head>
  <body>
    <form action="" method = "post">
        <div id="reg">
          <h1 class="signup-title">Đăng Ký</h1>
          <label for="fullname" class="singnup-label">Tên đăng nhập</label>
          <input
            name = "username"
            type="text"
            id="username"
            class="signup-input"
            placeholder="Tên đăng nhập"
          />
          <label for="email" class="singnup-label">Email</label>
          <input name = "email" type="text" id="email" class="signup-input" placeholder="Email" />
          <label for="password" class="singnup-label">Mật khẩu</label>
          <input
            name = "password"
            type="password"
            id="password"
            class="signup-input"
            placeholder="Mật khẩu"
          />
          <label for="password1" class="singnup-label">Nhập lại mật khẩu</label>
          <input
            type="password1"
            id="password1"
            class="signup-input"
            placeholder="Nhập Lại Mật khẩu"
          />
          <div class="or">
            <span>Hoặc</span>
          </div>
          <button class="signup-with">
            <span>Đăng kí với Google</span>
          </button>
          <button class="signup-with">
            <span>Đăng kí với Facebook</span>
          </button>
          <button class="signup-btn" name = "signup_btn" type="submit">Đăng Ký</button>
    </form>
        <?php
           require 'db/connect.php';
           if (isset($_POST['signup_btn'])) {
            //echo "Đã submit";
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            if (
                !empty($username) && !empty($email) && !empty($password)) {
                // echo "<pre>";
                // print_r($_POST);
                $sql = "INSERT INTO `taikhoandb`(`taikhoan`, `email`,`matkhau`) VALUES('$username','$email',
                '$password')";
        
                if ($conn->query($sql))
                  echo "Đăng kí tài khoản thành công";
                else
                    echo "{$sql}" . $conn->error;
            } else
                echo "Submit failed!";
        
            $conn->close();
        }
        // else
        //     echo "Submit failed";
        ?>

      <div class="login">Bạn đã có tài khoản? <a href="login-form.php">Đăng nhập</a></div>
    </div>
  </body>
</html>
