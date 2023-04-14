<?php

// $check=false;
$check=false;

echo !$check;
echo "<hr>";

$price=125;
echo $price;
$price++;
echo $price;
$price--;
echo $price;
echo ++$price;
echo "<hr>";

$num1=10;
$num2=25;
echo '$num1=' . $num1 . '(宣告num1)' ;
echo "<br>";
echo '$num2=' . $num2 . '(宣告num2)';
echo "<br>";
echo "+ =>";
echo $num1+$num2;
echo "<br>";
echo "- =>";
echo $num1-$num2;
echo "<br>";
echo "* =>";
echo $num1*$num2;
echo "<br>";
echo "/ =>";
echo $num1/$num2;
echo "<br>";
echo "% =>";
echo $num1%$num2;
echo "<hr>";

// 指派運算子
// 指派 =
$name='高仕庭';
// 陣列用 (胖箭頭fat arrow)=>
// 物件導向用 (瘦箭頭fat arrow)->
['name'=>'高仕庭'];


// 三元運算子
$score=50;
$level=($score>=60)?'及格':'不及格';

echo $level;

