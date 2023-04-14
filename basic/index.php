<?php

$name='mary';
// echo $name;
$age=24;
$total=15*110;

echo "<span style='color:blue;font-size:35px'>";
echo "名字是：";
echo $name;
echo "</span><br>";

echo "<span style='color:green;font-size:35px'>";
echo "年齡是：";
echo $age;
echo "</span><br>";

echo "<span style='color:red;font-size:35px'>";
echo "總價是：";
echo $total;
echo "</span><br>";

define("PI",3.1415967);
echo PI;
echo "<br>";
echo 10*10*PI;
echo "<hr>";

//可變變數
$name='mack';
$$name=55;
$$name='abc';
$$name=123;

echo $mack;

?>

