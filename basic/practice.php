<?php
echo '交換2個變數的值：';
$a=10;
$b=50;
$a="貓";
$b="狗";
echo "<br>";
echo '變數a='.$a;
echo "<br>";
echo '變數b='.$b;
echo "<hr>";

$tmp=$a;
$a=$b;
$b=$tmp;
echo '交換結果(使用暫存變數$tmp)：';
echo "<br>";
echo '變數a='.$a;
echo "<br>";
echo '變數b='.$b;
echo "<br>";
echo "<br>";
[$a, $b] = [$b, $a];
echo '二次交換結果(使用陣列)：';
echo "<br>";
echo '變數a='.$a;
echo "<br>";
echo '變數b='.$b;
echo "<hr>";

?>