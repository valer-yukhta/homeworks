<?php
$number = 442158755745;
$num = 5;
if(!is_numeric($number))
    exit("Введите число! - $number");
else {
    $str = (string)$number;
    $count = 0;
    for($i = 0; $i < strlen($str); $i++){
        if ($str[$i] == $num)
            $count++;}
    if(!$count)
        echo "Число $num не входит в число $number";
    else
        echo "Число $num входит $count раза в число $number";}
