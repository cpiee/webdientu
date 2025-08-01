<?php 
session_start();

if(isset($_COOKIE['remember'])){
    require 'admin/root.php';
    $token = $_COOKIE['remember'];
    $sql = "SELECT * from customers
    where `token` = '$token' limit 1";
    $result = mysqli_query($connect, $sql);
    $number_rows = mysqli_num_rows($result);
    if($number_rows){
        $each = mysqli_fetch_array($result);
        $_SESSION['id'] = $each['id'];
        $_SESSION['name'] = $each['name'];
    }
}

if(isset($_SESSION['id'])){
    header('location:index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./public/css/rss.css" />
    <link rel="stylesheet" href="./public/css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        .h1 {
            flex: 4;
            color: #ffff;

        }

        .sign {
            width: 500px;
            min-height: 500px;
            margin: 0 auto;
            padding-top: 80px;
            background-color: #cce6ff;
        }

        .text-status {
            font-size: 2rem;
            font-weight: 400;
            text-align: center;
            padding: 12px;
        }

        .text-status.text-error {
            color: red;
        }

        .text-status.text-success {
            color: green;
        }

        .sign form {
            max-width: 400px;
            margin: 0 auto;
            padding: 45px 20px;
        }

        .sign form label {
            display: block;
            font-size: 1.7rem;
            padding: 10px;
        }

        .sign form input {
            display: block;
            width: 100%;
            height: 34px;
            outline: none;
            border: none;
            padding-left: 10px;
            background-color: #ffff;

        }

        .sign form button {
            float: right;
            margin-top: 10px;
            padding: 10px;
            outline: none;
            border: none;
            background-color: #1a75ff;
            color: #ffff;
            font-size: 1.5rem;
        }

        .sign form a {
            display: block;
            float: right;
            padding: 10px;
            color: #1a75ff;
            font-size: 1.5rem;
        }
        .Remember {
            display: flex;
            align-items: center;
            margin-top: 12px;
        }
        .Remember span {
            display: inline-block;
            font-size: 1.2rem;
            color: #555;

        }
        .Remember input {
            display: inline-block !important;
            width: 14px !important;
            height: 24px !important;
            margin: 0 6px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- dau -->
        <div class="header header-fixed">
            <div class="header-container">
                <header class="header-top">
                    <div class="logo">
                        <a href="index.php">
                            <img src="./public/img/logo1.png" alt="" class="img">
                        </a>
                    </div>
                    <div class="h1">
                        <h1>Đăng Nhập</h1>
                    </div>
                </header>
            </div>
        </div>
        <div class="container">
            <div class="grid_full-width">
                <div class="sign">
                    <?php if (isset($_SESSION['error'])) { ?>
                        <h5 class="text-status text-error">
                            <?php
                                echo $_SESSION['error'];
                                unset($_SESSION['error']);
                            ?>
                        </h5>
                    <?php } ?>

                    <?php if (isset($_SESSION['success'])) { ?>
                        <h5 class="text-status text-success">
                            <?php
                                echo $_SESSION['success'];
                                unset($_SESSION['success']);
                            ?>
                        </h5>
                    <?php } ?>
                    <form method="post" action="process_login.php">
                        <a href="signup.php">Đăng Ký</a>
                        <label for="">Email</label>
                        <input type="email" name="email">
                        <label for="">Password</label>
                        <input type="password" name="password">
                        <div class="Remember">
                            <input type="checkbox" name="remember">
                            <span>Remember Me</span>
                            <a style="margin-left: auto; padding: 0;" href="forgot_password.php">Quên mật khẩu</a>
                        </div>
                        <button type="submit">Đăng Nhập</button>
                    </form>
                </div>
            </div>
            <div class="footer">
                <div class="grid_full-width">
                    <div class="grid">
                        <div class="row">
                            <div class="col col-4 col-mobi">
                                <div class="logo logo-bottom ml-mobi">
                                    <img src="./public/img/logo1.png" alt="" class="img">
                                </div>
                                <div class="footer__text ml-mobi">
                                  
                                </div>
                            </div>
                            <div class="col col-4 col-mobi">
                                <div class="footer__about">
                                    <h3>Địa chỉ</h3>
                                </div>
                                <div class="footer__text">
                                    <p>
                                        Đống Đa - TP.Huế
                                    </p>
                                    <p>
                                        Đống Đa - TP.Huế
                                    </p>
                                </div>
                            </div>
                            <div class="col col-4 col-mobi">
                                <div class="footer__about">
                                    <h3>Dịch vụ</h3>
                                </div>
                                <div class="footer__text">
                                    <p>
                                        Bảo hành rơi vỡ, ngấm nước Care Diamond
                                    </p>
                                    <p>
                                        Bảo hành Care X60 rơi vỡ ngấm nước vẫn Đổi
                                        mới
                                    </p>
                                </div>
                            </div>
                            <div class="col col-4 col-mobi">
                                <div class="footer__about">
                                    <h3>Liên hệ</h3>
                                </div>
                                <div class="footer__text">
                                    <p>Phone Sale: <a href="tel:+00 151515">(+84) 0999 999 9999</a></p>
                                    <p>Email: <a href="mailto:hieunhantong@gmail.com">hieunhantong@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>

        <?php include './partials/footer.php' ?>
    </div>
</body>

</html>