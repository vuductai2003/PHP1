<?php
require 'connect.php';
if (isset($_POST['btn_signIn'])) {
    // Validate
    // ghi dữ liệu sau khi submit vâo các biến
    $usename = $_POST['user'];
    $password = $_POST['pass'];
    // $sql="INSERT INTO `tbl_user`(`username`,`password`) VALUES('{$username}','{$password}')";
    $sql = "INSERT INTO `tbl_user` ( `user_name`, `password`) VALUES ( '{$usename}',' {$password}' )";
    $connect->exec($sql);
    echo "thêm thành công";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí</title>
</head>

<body>
<h1>Đăng kí</h1>
<form action="" method="POST">
    <label for="">Tên đăng nhập</label>
    <input type="text" name="user"><br><br>
    <label for="">Mật Khẩu</label>
    <input type="password" name="pass"><br><br>
    <input type="submit" name="btn_signIn" value="Đăng kí">
</form>
</body>
</html>
