<?php
echo "<h1>九九乘法表</h1>";

$nine = [];
for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        $nine[] = "$i x $j=" . $i * $j;
    }
}

// echo "<pre>";
// print_r($nine);
// echo "</pre>";
// echo "<hr>";

foreach ($nine as $k => $str) {
    echo $str;
    if ($k % 9 == 8) {
        echo "<br>";
    }
}
echo "<hr>";



echo "<h1>威力彩選號</h1>";
echo "<br>";

$lotto = [];
// $i=0;
// while($i<6){

while (count($lotto) < 6) {
    $tmp=rand(1,38);
    // echo "亂數產生的數值:".$tmp;

    if(in_array($tmp,$lotto)){
        // echo "有發生重複的數值".$tmp;
    }
    else{
        // echo "<br>";
        // echo "沒有重複的數值，所以寫入陣列";
        $lotto[]=$tmp;
    }

    // if(!in_array($tmp,$lotto)){
    //     $lotto[]=$tmp;
    // }

    echo "<pre>";
    print_r($lotto);
    echo "</pre>";
}

foreach ($lotto as $num) {
    echo $num . ',';
}
echo "<hr>";