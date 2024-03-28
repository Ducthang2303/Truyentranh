<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #fff;
            border-radius: 8px;
            padding: 30px;
            
            width: 600px;
            text-align: center;
            border: 1px solid #C8C8C8;
        }
        .login-container h2 {
            margin-bottom: 20px;
        }
        h3{
            font-size: 14px;
            font-weight: lighter;
            color: #B0B0B0;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: calc(100% - 22px);
        }
        .login-container input[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .login-container .social-login {
            margin-top: 20px;
        }
        .login-container .social-login a {
            display: inline-block;
            margin-right: 10px;
        }
        .login-container .social-login a img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 1px solid #ccc;
            padding: 5px;
            cursor: pointer;
        }
        .login-container .social-login a img:hover {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Đăng nhập</h2>
        <form action="">
            <input type="text"  name="username" placeholder="Email hoặc Tên đăng nhập" required>
            <input type="password" name="password" placeholder="Mật khẩu" required>
            <input type="submit" value="Đăng nhập">
        </form>
        <h3>⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯ Hoặc đăng nhập bằng ⎯⎯⎯⎯⎯⎯⎯⎯⎯</h3>
        <div class="social-login">
            <a href="#"><img src="google.jpg" alt="Google"></a>
            <a href="#"><img src="facebook.jpg" alt="Facebook"></a>
        </div>
        <p>Bạn chưa có tài khoản? <a href="#">Đăng ký tại đây</a></p>
    </div>
</body>
</html>
