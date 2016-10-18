<?php
$number = 12345;
if(!is_numeric($number))
    exit ("Введите число! - $number");
else {
    $str = (string)$number;
    $result = 0;
    for($i = 0; $i < strlen($str); $i++){
        $result += $str[$i];
    }
}
echo 'Сума цифер чисел = '.$result;
