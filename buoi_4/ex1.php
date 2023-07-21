<?php

$listSV = array(
    array(
        'masv' => "ph001",
        'name' => "Lê Thu Hà",
        'point' => 9
    ),
    array(
        'masv' => "ph002",
        'name' => "Trần Thị Huệ",
        'point' => 2
    ),
    array(
        'masv' => "ph003",
        'name' => "Trần Thị Loan",
        'point' => 7
    ),
    array(
        'masv' => "ph004",
        'name' => "Nguyễn Văn An",
        'point' => 3
    ),
    array(
        'masv' => "ph005",
        'name' => "Hoàng Quang Trung",
        'point' => 4
    ),
);
//  echo "<pre>";
//  print_r($listSV);
//  echo "</pre>";
echo "<h1>DANH SÁCH SINH VIÊN HỌC LẠI</h1>";
foreach ($listSV as $sv) {
    if ($sv['point'] < 5) {
        echo "sinh viên" . $sv['name'] . "có mã sinh viên: " . $sv['masv'];
        echo "<br>----------------------------------------------------------<br>";
    }
}


