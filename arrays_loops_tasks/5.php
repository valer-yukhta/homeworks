<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr as $key => $val) {
    echo $key . ' <br>';
}
foreach ($arr as $val) {
    echo $val . '<br>';
}
