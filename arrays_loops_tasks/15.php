<?php
$arr = array(4, 2, 5, 19, 13, 0, 10);
$e = [2,3,4];
foreach($arr as $val){
    if(in_array($val, $e))
        exit("Есть!");
}
echo "Нет!";
