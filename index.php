<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../feed/css/feed.css" />
    <title>FeedBack Form</title>
</head>
<body>


<?php
/* $a['one'] = array(1 => "январь",2 => "февраль", 0 => "март");
$a['two'] = array(3 => "something", array("ffff"));
//echo $a ["t"];
$a[3] = "Месяц Икс";
$a[1] = "Некий месяц";

//foreach ($a as $k => $v){
 //   echo $k . " --- ";
//    print_r($v);
 //   var_dump($v);
 //   echo "<br>";
 //   echo "<br>";
//}
echo "<br>";
//for ($i = 0; $i < 3; $i++){
//   echo $a[$i] . " --- ";
//}
$i = 0;
while ($i <3){
    echo $a['one'][$i] . " --- ";
//    print_r($v);
    //var_dump($v);
    echo "<br>";
    echo "<br>";
    $i++;
}

$i = 0;
do {
    echo $a['one'][$i] . " --- ";
//    print_r($v);
    //var_dump($v);
    echo "<br>"
    echo "<br>";
    $i++;
} while ($i + 1 == 2 && $a['two'][3] == "something"); */

$arr = array('green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой');
foreach ($arr as $key => $val) {
    echo $key . ' <br>';
};
foreach ($arr as $key => $val) {
    echo $val . '<br>';
}


?>

</body>
</html>