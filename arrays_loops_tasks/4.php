<?php
$arr = array(26, 17, 136, 12, 79, 15);
$result = 0;
foreach ($arr as $val) {
    $result += ($val*$val);
}
echo $result;
