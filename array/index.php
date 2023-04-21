<?php

$a[1] = 'A';
$a['001'] = "B";
$a['name'] = "Jhon";
// $a='cdef';
$a['name'] = "mack";
$a['p_name'] = "Jhon";
echo "<pre>";
print_r($a);
echo "</pre>";

$b[] = "B";
$b[] = "C";
$b[] = "D";
$b[] = "E";
$b[] = "F";
echo "<pre>";
print_r($b);
echo "</pre>";


$c = ["A", "B", 'C'];
$c[] = "D";
$c['total'] = 5;
$c[] = "E";
$c['total'] = 6;
echo "<pre>";
print_r($c);
echo "</pre>";


$d = [12, 2, 30,"M" ,24, 9, 77,"A"];
echo "<pre>";
print_r($d);
echo "<br>";
echo array_search(9,$d);
echo "<br>";
echo $d[5];


sort($d);
echo "<pre>";
print_r($d);
echo "</pre>";

rsort($d);
echo "<pre>";
print_r($d);
echo "</pre>";
echo "<hr>";



$keys=array_keys($a);
echo "<pre>";
print_r($keys);
echo "</pre>";
$keys=array_keys($d);
echo "<pre>";
print_r($keys);
echo "</pre>";
echo "<hr>";


// $result=sort($d);
// 不要要使用這個
// echo "<pre>";
// print_r($d);
// echo "</pre>";
// echo $result;


$fill=array_fill(0,10,'hi');
echo "<pre>";
print_r($fill);
echo "</pre>";

$e = ['數學' =>
[
    [
        '姓名' => '小明', '成績' => 98
    ],
    [
        '姓名' => '小明', '成績' => 98
    ],
    [
        '姓名' => '小明', '成績' => 98
    ]
]];
// echo "<pre>";
// print_r($e);
// echo "</pre>";

echo "<hr>";

if (is_array($a)) {
    echo "a是陣列";
} else {
    echo "a不是陣列";
}
echo "<br>";
if (in_array("D", $c)) {
    echo "D在陣列中";
} else {
    echo "D不在陣列中";
}
echo "<hr>";


$s=implode('==>',$a);
echo $s;
$array=explode('==>',$s);
echo "<pre>";
print_r($array);
echo "</pre>";






// echo $a[1];
// echo "<br>";
// echo $a[1];
// echo $a['001'];
// echo $a[name01];
// echo "<br>";
// echo $b[0];
// echo "<br>";
