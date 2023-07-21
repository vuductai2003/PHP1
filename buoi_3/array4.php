<?php
// xuất các phần tử lớn hơn 5
$arr = [6,2,5,7,1,8];
for ($i = 0; $i<=count($arr)-1;$i++){
    if ($arr[$i]>=5){
        echo $arr[$i];
        echo "<hr>";
    }
}

// hoặc
foreach ($arr as $var){
    if ($var>5){
        echo "<hr>";
        echo $var;
    }
}
// đầy đủ
foreach ($arr as $key=>$val){
    if ($val>=5){
        echo "Phần từ ở vị trí $key có giá trị là $val";
        echo "<hr/>";
    }
}