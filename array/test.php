<?php
$d=["A",9,"C",21,77,3];

echo "<pre>";
print_r($d);
echo "</pre>";

sort($d);

echo "<pre>";
print_r($d);
echo "</pre>";

rsort($d);

echo "<pre>";
print_r($d);
echo "</pre>";

echo "<hr>";



$d = [12, 2, 30,"M" ,24, 9, 77,"A"];
echo "<pre>";
print_r($d);
echo "<br>";

sort($d);
echo "<pre>";
print_r($d);
echo "<br>";

rsort($d);
echo "<pre>";
print_r($d);
echo "<br>";

?>