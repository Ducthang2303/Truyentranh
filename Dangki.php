<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
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
        .register-container {
            background-color: #fff;
            border-radius: 8px;
            padding: 30px;
            width: 300px;
            text-align: center;
            border: 1px solid #C8C8C8;
        }
        .register-container h2 {
            margin-bottom: 20px;
        }
        .register-container input[type="text"],
        .register-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: calc(100% - 22px);
        }
        .register-container input[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .register-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .register-container .social-login {
            margin-top: 20px;
        }
        .register-container .social-login a {
            display: inline-block;
            margin-right: 10px;
        }
        .register-container .social-login a img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 1px solid #ccc;
            padding: 5px;
            cursor: pointer;
        }
        .register-container .social-login a img:hover {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Đăng ký</h2>
        <form action="">
            <input type="text" name="username" placeholder="Tên đăng nhập" required>
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="password" id="password" placeholder="Mật khẩu" required>
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Xác nhận mật khẩu" required>
            <input type="submit" value="Đăng ký">
        </form>
        
        <p>Bạn đã có tài khoản? <a href="#">Đăng nhập tại đây</a></p>
    </div>
    <script>
        var password = document.getElementById("password");
        var confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Mật khẩu không khớp");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
</body>
</html>
