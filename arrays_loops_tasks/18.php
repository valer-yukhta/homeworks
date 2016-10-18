<?php
$month = "October";
$year = array("January", "February", "March", "April","May", "June","July", "August", "September", "October", "November", "December");
foreach($year as $val){
    if ($val == $month){
        echo "<b>$val</b><br>";
    }else{
        echo $val . "<br>";}
}
