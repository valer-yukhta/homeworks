<?php
$rows = 5;
$cols = 5;
$colors = array('red','yellow','blue','gray','maroon','brown','green');
echo '<table border="1">';
for($tr=1;$tr<=$rows;$tr++){
    echo '<tr>';
    for($td=1;$td<=$cols;$td++){
        $number = rand();
        $background = $colors[rand(0,count($colors)-1)];
        echo "<td style='background-color:{$background}'>".$number.'</td>';
    }
    echo '</tr>';
}
echo '</table>';
