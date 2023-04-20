<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>九九乘法表</title>
</head>

<body>
    <?php
    //for迴圈
    echo "for迴圈";
    echo "<br>";
    for ($i = 1; $i <= 9; $i++) {
        echo "1 x $i =";
        echo 1 * $i;
        echo "&nbsp";
    }
    echo "<br>";
    for ($i = 1; $i <= 9; $i++) {
        echo "2 x $i =";
        echo 2 * $i;
        echo "&nbsp";
    }
    echo "<br>";
    for ($i = 1; $i <= 9; $i++) {
        echo "3 x $i =";
        echo 3 * $i;
        echo "&nbsp";
    }
    echo "<br>";
    for ($i = 1; $i <= 9; $i++) {
        echo "4 x $i =";
        echo 4 * $i;
        echo "&nbsp";
    }
    echo "<br>";
    for ($i = 1; $i <= 9; $i++) {
        echo "5 x $i =";
        echo 5 * $i;
        echo "&nbsp";
    }
    echo "<br>";
    for ($i = 1; $i <= 9; $i++) {
        echo "6 x $i =";
        echo 6 * $i;
        echo "&nbsp";
    }
    echo "<br>";
    for ($i = 1; $i <= 9; $i++) {
        echo "7 x $i =";
        echo 7 * $i;
        echo "&nbsp";
    }
    echo "<br>";
    for ($i = 1; $i <= 9; $i++) {
        echo "8 x $i =";
        echo 8 * $i;
        echo "&nbsp";
    }
    echo "<br>";
    for ($i = 1; $i <= 9; $i++) {
        echo "9 x $i =";
        echo 9 * $i;
        echo "&nbsp";
    }
    echo "<br>";
    echo "<hr>";


    //for巢狀迴圈
    echo "for巢狀迴圈";
    echo "<br>";

    for ($i = 1; $i <= 9; $i++) {
        for ($j = 1; $j <= 9; $j++) {
            echo "$i x $j =";
            echo $i * $j;
            echo "&nbsp";
        }
        echo "<br>";
    }
    ?>

</body>

</html>