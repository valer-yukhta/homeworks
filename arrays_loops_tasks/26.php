<?php
$arr = array();
for($i = 0; $i < 10; $i++){
    $arr[] = rand(-5, 10);
}
echo "<pre>";
print_r($arr);
$min = $arr[0];
$max = $arr[0];
foreach ($arr as $key => $val) {
    if ($val < $min) {
        $min = $val;
        $key_min = $key;}
    if ($val > $max) {
        $max = $val;
        $key_max = $key;}}
$arr[$key_min] = $max;
$arr[$key_max] = $min;
echo "<br> Min = $min | Max = $max <br>";
print_r($arr);
