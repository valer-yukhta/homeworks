<?php
$week = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
foreach($week as $val){
    if ($val == "Saturday" || $val == "Sunday"){
        echo "<b>$val</b><br>";
    }else{
        echo $val . "<br>";}
}
