<?php
if (isset($_POST['btn_up'])){
//    echo "<pre>";
//    print_r($_FILES);
    $dir = "uploads/";
    $nameFile = basename($_FILES['haFile']['name']);
    $upfile = $dir.$nameFile;
    if (move_uploaded_file($_FILES['haFile']['tmp_name'], $upfile)){
        echo 'upload thanh cong';
    } else {
        echo 'khong thanh cong';
    }
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
</head>
<body>
<h1>Uploads File</h1>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="haFile">
    <input type="submit" name="btn_up" value="Up file">
</form>
</body>
</html>
