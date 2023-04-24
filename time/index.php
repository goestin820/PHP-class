<h2>時間與日期</h2>
<?php

date_default_timezone_set("Asia/Taipei");

echo date("Y-m-d H:i:s");
echo "<br>";

echo strtotime("now");

echo "<br>";
$yestoday = strtotime("now") - (60 * 60 * 24);
echo $yestoday;
echo "<br>";
echo date("Y-m-d H:i:s", $yestoday);
echo "<hr>";


$today = strtotime("now");
echo "現在的時間：" . $today . "秒";
echo "<br>";
echo "可讀的日期字串:" . date("Y-m-d H:i:s", $today);

$tomorrow = strtotime("+1 days", $today);
echo "<br>";

echo "明天:" . date("Y-m-d H:i:s", $tomorrow);

$yestoday = strtotime("-1 days", $today);
echo "<br>";

echo "昨天:" . date("Y-m-d H:i:s", $yestoday);

$nextWeek = strtotime("+1 week", $today);
echo "<br>";

echo "下周:" . date("Y-m-d H:i:s", $nextWeek);

$lastWeek = strtotime("-1 week", $today);
echo "<br>";

echo "上周:" . date("Y-m-d H:i:s", $lastWeek);
echo "<hr>";
?>

<h2>計算距離自己下一次生日還有幾天</h2>
<?php
// $startday=strtotime("2023-04-24");
// $endday=strtotime("2023-10-07");
// $now = strtotime(date("Y-m-d"));
// date_default_timezone_set("Asia/Taipei");

$now = strtotime(date("Y-m-d"));
$birthday = strtotime("2023-8-20");
//echo "<br>";
//echo $now;
//echo "<br>";
//echo $birthday;

$days = ($birthday - $now) / (24 * 60 * 60);

echo "距離下一次的生日 " . date("Y-m-d", $birthday) . " 還有" . $days . "天";
echo "<hr>";
?>



<h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>
<ul>
    <li>2023/04/24</li>
    <li>4月24日 Monday</li>
    <li>2023-4-24 14:9:5</li>
    <li>2023-04-24 14:09:05</li>
    <li>今天是西元2023年4月24日 上班日(或假日)</li>
</ul>
<?php
$today = strtotime('now');
echo "<br>";
echo date("Y/m/d");
echo "<br>";
// echo date("m月d日 l");
echo date("n月j日 l");
echo "<br>";
echo date("Y-n-j G:") . (int)date("i") . ":" . (int)date("s");
echo "<br>";
echo date("Y-m-d H:i:s");
echo "<br>";
echo "今天是西元" . date("Y年n月j日");
echo date("N") >= 6 ? "是假日" : "是工作日";
?>

<h2>利用迴圈來計算連續五個週一的日期</h2>
<?php
$today = strtotime("now");
$week = date("N", $today);
$gap = $week - 1;
// $gap = 1 - $week;
// echo $gap;
// echo "<br>";
// $monday=date("Y-m-d l",strtotime("$gap days"),$today);
$seconds = strtotime("+$gap days", $today);
$monday = date("Y-m-d l", $seconds);

for ($i = 0; $i < 5; $i++) {
    echo date("Y-m-d l", strtotime("+$i week", $seconds));
    echo "<br>";
}

?>