<?php
$arr = array();
for($i = 0; $i < 20; $i++){
    $arr[] = rand(1, 100);}
echo "<pre>";
print_r($arr);
echo "Елементы масива больше ноля и у которых парные индексы: <br/>";
$j = 1;
foreach ($arr as $key => $val) {
    if(($key % 2 == 0) && $val > 0 && $key > 0){
        echo "$val | ";
        $j *= $val;}}
echo "<br/> Произведение = $j <br/>";
echo "Елементы масива больше ноля и у которых непарные индексы: <br/>";
foreach ($arr as $key => $val) {
    if(($key % 2 != 0) && $val > 0){
        echo "$val | ";
        $j *= $val;}}
