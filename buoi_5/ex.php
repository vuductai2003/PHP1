<?php
$listSV=array(
    array(
        'name'=>"Ha",
        'masv'=>"ph002",
        'point'=>6
    ),
    array(
        'name'=>"Hoa",
        'masv'=>"ph003",
        'point'=>4
    ),
    array(
        'name'=>"Huệ",
        'masv'=>"ph004",
        'point'=>2
    ),
    array(
        'name'=>"Hải",
        'masv'=>"ph005",
        'point'=>1
    ),
);
// 1. Viết hàm getStatus trả về "pass" nếu sv có điểm>=5 nếu k hàm trả về "fail"
// Hiển thị thông tin sv có cột trạng thái lên bảng
function getStatus($diem){
    if($diem>=5){return "pass";}
    else{
        return "fail";
    }
}
echo getStatus(7);
echo "<br>";
//  viết hàm getNameById() trả về tên của sv có mã sv đc truyền vào
function getNameById($ms){
    global $listSV;
    foreach ($listSV as $sv){
        if ($sv['masv']==$ms){
            return $sv['name'];
        }
    }
}
echo getNameById('ph005');
echo "<br>";
