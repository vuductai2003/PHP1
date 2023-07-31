<?php
require "connect.php";
$id = $_GET['id'];
// Lấy thông tin của phần tử muốn edit
$sql="SELECT * FROM `tbl_user` WHERE `user_id`= {$id}";
$data=$connect->query($sql);
$userEdit=$data->fetch();
showArray($userEdit);
