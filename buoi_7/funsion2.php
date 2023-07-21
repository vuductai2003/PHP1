<?php
function sayHello($x,$y='word'){
    echo $x. " " . $y;
}
echo sayHello('tai');
echo '<br>';

function getName(){
    $x = func_get_arg(0);
    $y = func_get_arg(1);
    $z = func_get_arg(2);
    echo $x." ".$y." ".$z;
}
getName('tai','nam','phuong');
echo '<br>';
function makeauto(){
    $sum = 0;
    $num = func_num_args();
    for ($i = 0; $i<$num;$i++){
        $sum += func_get_arg($i);
    }
   return $tb = $sum/$num;
}
echo makeauto(3,4,5,7,4,3,6,4,7,5);