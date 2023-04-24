<h3>字串取代</h3>
<h4>將aaddw1123改成*********</h4>

<?php

$str = "aaddw1123456789";
echo str_replace(['a', 'd', 'w', 1, 2, 3, 2, 3, 4, 5, 7, 8], '*', $str);
// echo str_replace($str,$replace,$str);
echo "<br>";
echo str_repeat("*", strlen($str));
echo "<hr>";


// echo str_replace("很好",$replace,str_replace("天","日",$str));
// echo "<br>";
// echo str_replace(["天","很好"],["日",$replace],$str);
// echo "<hr>";


$str = "this is a book";
$result = explode(" ", $str);

echo "<pre>";
print_r($result);
echo join(" ", $result);
echo "<hr>";

?>

<h3>子字串取用</h3>
<h4>將"The reason why a great man is great is that he resolves to be a great man"取前面字串10個位元</h4>
<?php
$str = "The reason why a great man is great is that he resolves to be a great man";

echo mb_substr($str, 0, 10) . "...";
echo "<hr>";
?>

<h3>尋找字串與HTML、CSS整合應用</h3>
<ul>
    <li>給定一個句子，將指定的關鍵字放大</li>
    <li>學會PHP網頁程式設計，薪水會加倍，工作會好找</li>
    <li>請將上句中的 “程式設計” 放大字型或變色.</li>
</ul>

<?php

$str = "學會PHP網頁程式設計，薪水會加倍，工作會好找";
// $replace="<span style='font-size:32px;color:red'>城市設計</span>";
// echo str_replace("程式設計",$replace,$str);
$target = "程式設計";
$replace = "<span style='font-size:32px;color:red'>$target</span>";
echo str_replace($target, $replace, $str);

$split = explode($target, $str);
$split1 = explode("薪水", $str);
echo "<br>";
echo join($replace, $split);
echo "<br>";
echo join($replace, $split1);
?>