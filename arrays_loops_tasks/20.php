<?php
$day = "Sunday";
$week = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
Foreach ($week as $val){
    if ($val == $day){
        echo "<em>$val</em><br>";
    }else{
        echo $val . "<br>";}
}
