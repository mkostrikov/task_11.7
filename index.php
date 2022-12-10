<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Задание 11.7</title>
</head>

<body>
<?php
    $labels = ['A', 'B', '!A', 'A || B', 'A && B', 'A xor B'];
    function resultComparison ($a, $b) {
        $not = !$a ? 1 : 0;
        $or = ($a || $b) ? 1 : 0;
        $and = ($a && $b) ? 1 : 0;
        $xor = ($a xor $b) ? 1 : 0;
        echo '<tr>';
        echo "<td>$a</td>";
        echo "<td>$b</td>";
        echo "<td>$not</td>";
        echo "<td>$or</td>";
        echo "<td>$and</td>";
        echo "<td>$xor</td>";
        echo '</tr>';
    }
    echo '<table>';
    echo '<caption>Задание 1. Таблица истинности PHP</caption>';
        echo '<tr>';
        for ($j = 0; $j < count($labels); $j += 1) {
            echo "<th>{$labels[$j]}</th>";
        }
        echo '</tr>';
        resultComparison(0, 0);
        resultComparison(0, 1);
        resultComparison(1, 0);
        resultComparison(1, 1);
    echo '</table>';

    $keys = ['', 'true', 'false', '1', '0', '-1', '"1"', 'null', 'php'];
    $values = [true, false, 1, 0, -1, '1', null, 'php'];

    echo '<table>';
    echo '<caption>Задание 2.1. Гибкое сравнение в PHP</caption>';
    for ($i = 0; $i < 9; $i += 1) {
        echo '<tr>';
        echo "<th scope='row'>{$keys[$i]}</th>";
        if ($i === 0) {
            for ($j = 1; $j < 9; $j += 1) {
                echo "<th scope='col'>{$keys[$j]}</th>";
            }
        } else {
            for ($j = 1; $j < 9; $j += 1) {
                $res = $values[$i - 1] == $values[$j - 1] ? 1 : 0;
                echo "<td>$res</td>";
            }
        }
        echo '</tr>';
    }
    echo "<tfoot><td colspan='9'>При гибком сравнении для различных типов сравнение происходит
    после преобразования типа.</td></tfoot>";
    echo '</table>';

    echo '<table>';
    echo '<caption>Задание 2.2. Жесткое сравнение в PHP</caption>';
    for ($i = 0; $i < 9; $i += 1) {
        echo '<tr>';
        echo "<th scope='row'>{$keys[$i]}</th>";
        if ($i === 0) {
            for ($j = 1; $j < 9; $j += 1) {
                echo "<th scope='col'>{$keys[$j]}</th>";
            }
        } else {
            for ($j = 1; $j < 9; $j += 1) {
                $res = $values[$i - 1] === $values[$j - 1] ? 1 : 0;
                echo "<td>$res</td>";
            }
        }
        echo '</tr>';
    }
    echo "<tfoot><td colspan='9'>При жестком сравнении преобразование типа не происходит,
    поскольку это включает сравнение типа, а также значения.</td></tfoot>";
    echo '</table>';
    ?>
</body>

</html>