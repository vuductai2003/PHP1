<?php
require "connect.php";
require "function.php";
$sql="SELECT * FROM `tbl_user`";
$data=$connect->query($sql);
$lisUser=$data->fetchAll(PDO::FETCH_ASSOC);
showArray($listUser);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách thành viên</title>
    <style>
        table tr th{
            border-bottom: 3px solid brown;
            padding:  7px 20px;
        }
        table tr td{
            border-bottom: 1px solid brown;
            padding:  7px 20px;
        }
    </style>
</head>
<body>
<h1>Danh sách thành viên</h1>
<table>
    <tr>
        <th>STT</th>
        <th>User_Id</th>
        <th>Tên đăng nhập</th>
        <th>Mật khẩu</th>
        <th>Thao tác</th>
    </tr>
    <?php
    $stt=0;
    foreach($listUser as $user){
        $stt++;
        ?>
        <tr>
            <td><?php echo $stt ?></td>
            <td><?php echo $user['user_id'] ?></td>
            <td><?php echo $user['username'] ?></td>
            <td><?php echo $user ['password'] ?></td>
            <td><a href="delete.php?id=<?php echo $user['user_id']?>">Xóa</a> | <a href="edit.php"></a>Sửa</td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>