<?php

echo "<hr>";
echo "<h1>計算五百年內之閏年</h1>";
echo "2023 ~ 2523 <br>";

$years = [];
// i為當前西元年分
$i = 2023;
// j為最後西元年分
$j = 2523;

for ($year = $i; $i < $j; $i++) {
    if (($i % 4 == 0) && ($i % 100 != 0) || ($i % 400 == 0)) {
        $years[] = $i;
    }
}

foreach ($years as $k) {
    echo $k . "<br>";
}


$t = 2351;

if (in_array($t, $years)) {
    echo $t . "是閏年";
} else {
    echo $t . "是平年";
}
echo "<br>";

if (array_search($t, $years) != false) {
    echo $t . "是閏年";
} else {
    echo $t . "是平年";
}
echo "<hr>";


echo "<h1>計算天干地支年</h1>";
$sky = [
    "甲", "乙", "丙", "丁", "戊", "己", "庚", "辛", "壬", "癸",
];

$land = [
    "子", "丑", "寅", "卯", "辰", "巳", "午", "未", "申", "酉", "戌", "亥",
];

$skyland = [];
for ($i = 0; $i < 60; $i++) {
    $skyland[] = $sky[$i % 10] . $land[$i % 12];
}

echo "<pre>";
print_r($skyland);

$year=2053;
$startyear=1024; //甲子年
echo "給定西元年".$year;
$index=($year-$startyear)%60;
echo "<br>天干地支年為".$skyland[$index];
echo "<hr>";


echo "<h1>反轉陣列元素</h1>";
$a=[2,4,6,1,8];
echo "<pre>";
echo "原陣列:<br>";
print_r($a);
$times=ceil(count($a)/2); //計算反轉次數
$maxIndex=count($a)-1;  //計算陣列中最大索引值

for($i=0;$i<$times;$i++){
    $tmp=$a[$i];
    $a[$i]=$a[$maxIndex-$i];
    $a[$maxIndex-$i]=$tmp;
}

echo "<pre>";
echo "反轉陣列:<br>";
print_r($a);


                                        






