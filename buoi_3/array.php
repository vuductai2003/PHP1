<?php
$arr1 = array(4,7,3,8);
// thêm pt vào cuối mảng
$arr1[]=10;
echo $arr1[2];
// unset: xoá phần tử mảng
unset($arr1[1]);
var_dump($arr1);
echo "<hr/>";
// định ngĩa mảng với key xác định
$errol['user'] =  "tên đăng nhập ko đúng định dạng";
$errol['pass'] = "mật khẩu không đúng định dạng";
$errol['email'] = "email không đúng định dạng";
// hoặc
$errol = array(
    'user' => "tên đăng nhập ko đúng định dạng",
    'pass' => "mật khẩu không đúng định dạng",
    'email' => "email không đúng định dạng"
);
echo "<hr/>";
echo "<h1>thông tin mảng lỗi <h1/>";
echo "<pre>";
print_r($errol);
