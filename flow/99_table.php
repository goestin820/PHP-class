<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>九九乘法表table</title>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
            box-shadow: 2px 2px 2px gray;
        }

        td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }

        tr:nth-child(1) {
            background-color: #ccc;
        }

        td:nth-child(1) {
            background-color: #ccc;
        }
    </style>
</head>

<body>
    <table>
        <?php
        for ($i = 1; $i <= 9; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 9; $j++) {
                echo "<td>";
                echo "$j x $i =";
                echo $j * $i;
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <br>

    <table>
        <?php
        for ($i = 1; $i <= 9; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 9; $j++) {
                echo "<td>";
                echo "$i x $j =";
                echo $i * $j;
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <br>

    <table>
        <?php

        for ($i = 0; $i <= 9; $i++) {
            echo "<tr>";

            for ($j = 0; $j <= 9; $j++) {
                echo "<td>";
                // 根據不同的條件，顯示對應的結果
                if ($i == 0 && $j == 0) {
                    echo "&nbsp";
                } else if ($i == 0) {
                    echo $j;
                } else if ($j == 0) {
                    echo $i;
                    // } else {
                    //     echo $i * $j;
                    // }
                } else if($i>=$j){
                    echo $i * $j;
                }
                echo "</td>";
            }
            echo "</td>";
        }
        ?>
    </table>

</body>

</html>