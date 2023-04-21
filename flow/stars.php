<style>
    * {
        font-family: 'Courier New';
    }
</style>


<h3>
    直角三角形一
</h3>

<?php
// 外層為列印次數
for ($i = 0; $i < 5; $i++) {
    // 內層為列印星數
    for ($j = 0; $j < ($i + 1); $j++) {
        echo "*";
        // echo "<br>";
    }
    echo "<br>";
}
echo "<hr>";
?>

<h3>
    直角三角形(i=1,j=1)
</h3>

<?php
// 外層為列印次數
for ($i = 1; $i <= 5; $i++) {
    // 內層為列印星數
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
        // echo "<br>";
    }
    echo "<br>";
}
echo "<hr>";
?>


<h3>
    倒直角三角形
</h3>

<?php
// 外層為列印次數
for ($i = 0; $i < 5; $i++) {
    // 內層為列印星數
    for ($j = 0; $j < (5 - $i); $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<hr>";
?>


<h3>
    正三角形
</h3>
<?php

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < (4 - $i); $j++) {
        echo "&nbsp;";
    }

    for ($k = 0; $k < ($i * 2 + 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
echo "<hr>";
?>


<h3>菱形一</h3>

<?php

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < (4 - $i); $j++) {
        echo "&nbsp;";
    }
    for ($k = 0; $k < ($i * 2 + 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < $i + 1; $j++) {
        echo "&nbsp;";
    }

    for ($k = 0; $k < ((3 - $i) * 2 + 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
echo "<hr>";
?>


<h3>菱形二</h3>
<?php
$tmp = 0;
for ($i = 0; $i < 9; $i++) {

    /* if($i<5){
        $tmp=$i;
    }else{
        $tmp=8-$i;
    } */

    $tmp = ($i < 5) ? $i : 8 - $i;

    for ($j = 0; $j < (4 - $tmp); $j++) {
        echo "&nbsp;";
    }

    for ($k = 0; $k < ($tmp * 2 + 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
echo "<hr>";
?>


<h3>矩形</h3>
<?php
$n=13;

for($i=0;$i<$n;$i++){

    for($j=0;$j<$n;$j++){
        if($i==0 || $i==($n-1)){
            echo "*";
        }else if($j==0 || $j==$n-1){
            echo "*";
        }else{
            echo "&nbsp;";
        }
    }

    echo "<br>";
}
echo "<hr>";
?>


<h3>矩形對角線</h3>
<?php

$n=9;

for($i=0;$i<$n;$i++){

    for($j=0;$j<$n;$j++){
        if($i==0 || $i==($n-1)){
            echo "*";
        }else if($j==0 || $j==$n-1 || $i==$j || $i==$n-1-$j){
            echo "*";
        }else{
            echo "&nbsp;";
        }
    }

    echo "<br>";
}
?>