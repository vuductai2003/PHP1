<?php
require 'function.php';
if (isset($_POST['btn_register'])){
    // validate
    $error=[];
    // kiểm tra user
    if (empty($_POST['user'])){
        $error['user']= 'bạn cần đăng nhập';
    } else{
        $pattem = "/^[A-Z,a-z0-9_]{6,32}$/";
        if (!preg_match($pattem, $_POST['user'])){
            $error['user'] = 'Nhập không đúng định dạng';
        } else{
            $user = $_POST['user'];
        }
    }
    // kiểm tra pass
    if (empty($_POST['pass'])){
        $error['pass']= 'bạn cần nhập mật khẩu';
    } else{
        $pass = $_POST['pass'];
    }
    // kiểm tra email
    if (empty($_POST['email'])){
        $error['email']= 'bạn cần nhập email';
    } else{

        $email = $_POST['email'];
    }
    // kiểm tra add
    if (empty($_POST['address'])){
        $error['address']= 'bạn cần nhập địa chỉ';
    } else{
        switch ($_POST['address']){
            case 1:
                $add="Hà Nội";
                break;
            case 2:
                $add='Thanh Hoá';
                break;
            case 3:
                $add='Sài Gòn';
                break;
        }
//        $add = $_POST['address'];  do có switch
    }
    //
    if (empty($error)){
//        echo "Tên đăng nhập: {$user} <br> Email: {$email} <br> Mật khẩu: {$pass} <br> Address: {$add}";
        header("location:trangchu.php");
    }
//    else{
//        echo 'lỗi: <br>';
//        showArray($error);
//    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .errol{
            color: red;
        }
    </style>
</head>
<body>
<h1>Đăng kí</h1>
<Form action="" method="post">
    <label for="">Tên đăng nhập: </label>
    <input type="text" name="user" value="<?php if (isset($user)) echo $user?>"> <br>
    <p class="errol"><?php if (!empty($error['user'])) echo $error['user'] ?></p>
    <label for="">Mật khẩu: </label>
    <input type="password" name="pass" value="<?php if (isset($pass)) echo $pass?>"> <br>
    <p class="errol"><?php if (!empty($error['pass'])) echo $error['pass'] ?></p>
    <label for="">Email: </label>
    <input type="text" name="email" value="<?php if (isset($email)) echo $email?>"> <br>
    <p class="errol"><?php if (!empty($error['email'])) echo $error['email'] ?></p>
    <select name="address" value="<?php if (isset($add)) echo $add?>">
        <option value="">Chọn thành phố</option>
        <option value="1">Hà Nội</option>
        <option value="2">Thanh Hoá</option>
        <option value="3">Sài Gòn</option>
    </select> <br> <br>
    <p class="errol"><?php if (!empty($error['address'])) echo $error['address'] ?></p>
    <input type="submit" value="đăng nhập" name="btn_register">
</Form>
</body>
</html>
