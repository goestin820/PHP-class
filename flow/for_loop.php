<?php

for($i=0;$i<10;$i++){
    echo $i*10;
    echo "<br>";
}
// $i最後的數值
echo '$i='.$i;
echo "<hr>";

echo "用i*2-1計算";
echo "<br>";
$n=21;
// ceil 天花板
$limit=ceil($n/2);
// floor 樓地板
// $limit=floor(); 

for($i=1;$i<=($limit);$i++){
    // echo '$i=' . $i . "=>";
    echo $i*2-1;
    echo ",";
}
echo "<hr>";

echo "用i=i+2計算";
echo "<br>";
$n=21;

for($i=1;$i<=$n;$i=$i+2){
    // echo '$i=' . $i . "=>";
    echo $i;
    echo ",";
}
echo "<hr>";


echo "用i*11-1計算";
echo "<br>";
$n=60;
// ceil 天花板
$limit=ceil($n/11);
// floor 樓地板
// $limit=floor($n/11); 

for($i=10;$i<=($limit);$i++){
    // echo '$i=' . $i . "=>";
    echo $i*2-1;
    echo ",";
}
echo "<hr>";


echo "i*11-1計算";
echo "<br>";
for($i=0;$i<=10;$i++){
    // echo '$i=' . $i . "=>";
    echo $i*10;
    echo ",";
}
echo "<hr>";

