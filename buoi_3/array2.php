<?php
// mảng đa chiều
$sv1 = array(
    'name' => "Vũ Đức Tài",
    'id' => "ph43863",
    'point' => 8
);
$sv2 = array(
    'name' => "Trịnh Minh Đức",
    'id' => "ph43883",
    'point' => 4
);
$sv3 = array(
    'name' => "Nguyễn Văn Nam",
    'id' => "ph33743",
    'point' => 5
);

$SVarr = [$sv1, $sv2, $sv3];
echo "<pre>";
print_r($SVarr);
echo "<hr>";
// xem từng phần tử
echo $SVarr[1]['name'];