<?php
$str="今天天氣很好";
$str2="Today is a good day";
echo $str;
echo "<br>";
echo $str2;
echo "<br>";

echo "<h3>substr()</h3>";
echo substr($str,0,6);
echo "<br>";
echo substr($str2,2,5);

echo "<h3>mb_substr()</h3>";
echo mb_substr($str,0,2);
echo "<br>";
echo mb_substr($str2,0,3);

echo "<h3>中英混合取子字串</h3>";
$str3="Today 真是個 good day";
echo $str3;
echo "<br>";
echo mb_substr($str3,0,3);
echo "<br>";

echo "<hr>";
$str="    今天  天氣  很好    ";
$str2=" 今天 天氣 很好 ";
echo $str;
echo "<br>";
echo $str2;
echo "<br>";

echo trim($str);
echo "<br>";
echo trim($str2);
echo "<br>";
echo "<hr>";

$str="YA";
echo str_repeat($str,10);
echo "<hr>";
$str="今天天氣很好";
$replace="很糟";
echo str_replace("很好",$replace,$str);
echo "<br>";
echo str_replace("很好",$replace,str_replace("天","日",$str));
echo "<br>";
echo str_replace(["天","很好"],["日",$replace],$str);
echo "<hr>";

$str4="生成式，123456789,無人飛機起降。有形無形空間，都讓人著迷";
$ex=explode("，",$str4);
echo "<pre>";
print_r($ex);
$join=join("-",$ex);
echo "<pre>";
print_r($join);
echo "<hr>";

$str="今天天氣很好";
$str2="Today is a good day";
$search="天氣";
echo $str;
echo "<br>";
echo $str2;
echo "<br>";
echo $search;
echo "<br>";
echo mb_strpos($str,$search);
echo "<br>";
echo "<hr>";

echo mb_strlen($str);
echo "<br>";
echo mb_strlen($str2);
