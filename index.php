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
    <main>
        <table>
            <caption>Задание 1. Таблица истинности PHP</caption>
            <thead>
                <tr>
                    <th>A</th>
                    <th>B</th>
                    <th>!A</th>
                    <th>A || B</th>
                    <th>A && B</th>
                    <th>A xor B</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $a = 0 ?></td>
                    <td><?= $b = 0 ?></td>
                    <td><?= !$a ? 1 : 0 ?></td>
                    <td><?= ($a || $b) ? 1 : 0 ?></td>
                    <td><?= ($a && $b) ? 1 : 0 ?></td>
                    <td><?= ($a xor $b) ? 1 : 0 ?></td>
                </tr>
                <tr>
                    <td><?= $a = 0 ?></td>
                    <td><?= $b = 1 ?></td>
                    <td><?= !$a ? 1 : 0  ?></td>
                    <td><?= ($a || $b) ? 1 : 0 ?></td>
                    <td><?= ($a && $b) ? 1 : 0 ?></td>
                    <td><?= ($a xor $b) ? 1 : 0 ?></td>
                </tr>
                <tr>
                    <td><?= $a = 1 ?></td>
                    <td><?= $b = 0 ?></td>
                    <td><?= !$a ? 1 : 0  ?></td>
                    <td><?= ($a || $b) ? 1 : 0 ?></td>
                    <td><?= ($a && $b) ? 1 : 0 ?></td>
                    <td><?= ($a xor $b) ? 1 : 0 ?></td>
                </tr>
                <tr>
                    <td><?= $a = 1 ?></td>
                    <td><?= $b = 1 ?></td>
                    <td><?= !$a ? 1 : 0  ?></td>
                    <td><?= ($a || $b) ? 1 : 0 ?></td>
                    <td><?= ($a && $b) ? 1 : 0 ?></td>
                    <td><?= ($a xor $b) ? 1 : 0 ?></td>
                </tr>
            </tbody>
            <tfoot>

            </tfoot>
        </table>

        <table>
            <caption>Задание 2.1. Гибкое сравнение в PHP</caption>
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">
                        <?php
                        echo "true";
                        $x1 = true;
                        ?>
                    </th>
                    <th scope="col">
                        <?php
                        echo "false";
                        $x2 = false;
                        ?>
                    </th>
                    <th scope="col">
                        <?php
                        echo "1";
                        $x3 = 1;
                        ?>
                    </th>
                    <th scope="col">
                        <?php
                        echo "0";
                        $x4 = 0;
                        ?>
                    </th>
                    <th scope="col">
                        <?php
                        echo "-1";
                        $x5 = -1;
                        ?>
                    </th>
                    <th scope="col">
                        <?php
                        echo "\"1\"";
                        $x6 = "1";
                        ?>
                    </th>
                    <th scope="col">
                        <?php
                        echo "null";
                        $x7 = null;
                        ?>
                    </th>
                    <th scope="col">
                        <?php
                        echo "\"php\"";
                        $x8 = "php";
                        ?>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        <?php
                        echo "true";
                        $y1 = true;
                        ?>
                    </th>
                    <td><?= $y1 == $x1 ? 1 : 0 ?></td>
                    <td><?= $y1 == $x2 ? 1 : 0 ?></td>
                    <td><?= $y1 == $x3 ? 1 : 0 ?></td>
                    <td><?= $y1 == $x4 ? 1 : 0 ?></td>
                    <td><?= $y1 == $x5 ? 1 : 0 ?></td>
                    <td><?= $y1 == $x6 ? 1 : 0 ?></td>
                    <td><?= $y1 == $x7 ? 1 : 0 ?></td>
                    <td><?= $y1 == $x8 ? 1 : 0 ?></td>
                </tr>
                <tr>
                    <th scope="row">
                        <?php
                        echo "false";
                        $y2 = false;
                        ?>
                    </th>
                    <td><?= $y2 == $x1 ? 1 : 0 ?></td>
                    <td><?= $y2 == $x2 ? 1 : 0 ?></td>
                    <td><?= $y2 == $x3 ? 1 : 0 ?></td>
                    <td><?= $y2 == $x4 ? 1 : 0 ?></td>
                    <td><?= $y2 == $x5 ? 1 : 0 ?></td>
                    <td><?= $y2 == $x6 ? 1 : 0 ?></td>
                    <td><?= $y2 == $x7 ? 1 : 0 ?></td>
                    <td><?= $y2 == $x8 ? 1 : 0 ?></td>
                </tr>
                <tr>
                    <th scope="row">
                        <?php
                        echo "1";
                        $y3 = 1;
                        ?>
                    </th>
                    <td><?= $y3 == $x1 ? 1 : 0 ?></td>
                    <td><?= $y3 == $x2 ? 1 : 0 ?></td>
                    <td><?= $y3 == $x3 ? 1 : 0 ?></td>
                    <td><?= $y3 == $x4 ? 1 : 0 ?></td>
                    <td><?= $y3 == $x5 ? 1 : 0 ?></td>
                    <td><?= $y3 == $x6 ? 1 : 0 ?></td>
                    <td><?= $y3 == $x7 ? 1 : 0 ?></td>
                    <td><?= $y3 == $x8 ? 1 : 0 ?></td>
                </tr>
                <tr>
                    <th scope="row">
                        <?php
                        echo "0";
                        $y4 = 0;
                        ?>
                    </th>
                    <td><?= $y4 == $x1 ? 1 : 0 ?></td>
                    <td><?= $y4 == $x2 ? 1 : 0 ?></td>
                    <td><?= $y4 == $x3 ? 1 : 0 ?></td>
                    <td><?= $y4 == $x4 ? 1 : 0 ?></td>
                    <td><?= $y4 == $x5 ? 1 : 0 ?></td>
                    <td><?= $y4 == $x6 ? 1 : 0 ?></td>
                    <td><?= $y4 == $x7 ? 1 : 0 ?></td>
                    <td><?= $y4 == $x8 ? 1 : 0 ?></td>
                </tr>
                <tr>
                    <th scope="row">
                        <?php
                        echo "-1";
                        $y5 = -1;
                        ?>
                    </th>
                    <td><?= $y5 == $x1 ? 1 : 0 ?></td>
                    <td><?= $y5 == $x2 ? 1 : 0 ?></td>
                    <td><?= $y5 == $x3 ? 1 : 0 ?></td>
                    <td><?= $y5 == $x4 ? 1 : 0 ?></td>
                    <td><?= $y5 == $x5 ? 1 : 0 ?></td>
                    <td><?= $y5 == $x6 ? 1 : 0 ?></td>
                    <td><?= $y5 == $x7 ? 1 : 0 ?></td>
                    <td><?= $y5 == $x8 ? 1 : 0 ?></td>
                </tr>
                <tr>
                    <th scope="row">
                        <?php
                        echo "\"1\"";
                        $y6 = "1";
                        ?>
                    </th>
                    <td><?= $y6 == $x1 ? 1 : 0 ?></td>
                    <td><?= $y6 == $x2 ? 1 : 0 ?></td>
                    <td><?= $y6 == $x3 ? 1 : 0 ?></td>
                    <td><?= $y6 == $x4 ? 1 : 0 ?></td>
                    <td><?= $y6 == $x5 ? 1 : 0 ?></td>
                    <td><?= $y6 == $x6 ? 1 : 0 ?></td>
                    <td><?= $y6 == $x7 ? 1 : 0 ?></td>
                    <td><?= $y6 == $x8 ? 1 : 0 ?></td>
                </tr>
                <tr>
                    <th scope="row">
                        <?php
                        echo "null";
                        $y7 = null;
                        ?>
                    </th>
                    <td><?= $y7 == $x1 ? 1 : 0 ?></td>
                    <td><?= $y7 == $x2 ? 1 : 0 ?></td>
                    <td><?= $y7 == $x3 ? 1 : 0 ?></td>
                    <td><?= $y7 == $x4 ? 1 : 0 ?></td>
                    <td><?= $y7 == $x5 ? 1 : 0 ?></td>
                    <td><?= $y7 == $x6 ? 1 : 0 ?></td>
                    <td><?= $y7 == $x7 ? 1 : 0 ?></td>
                    <td><?= $y7 == $x8 ? 1 : 0 ?></td>
                </tr>
                <tr>
                    <th scope="row">
                        <?php
                        echo "\"php\"";
                        $y8 = "php";
                        ?>
                    </th>
                    <td><?= $y8 == $x1 ? 1 : 0 ?></td>
                    <td><?= $y8 == $x2 ? 1 : 0 ?></td>
                    <td><?= $y8 == $x3 ? 1 : 0 ?></td>
                    <td><?= $y8 == $x4 ? 1 : 0 ?></td>
                    <td><?= $y8 == $x5 ? 1 : 0 ?></td>
                    <td><?= $y8 == $x6 ? 1 : 0 ?></td>
                    <td><?= $y8 == $x7 ? 1 : 0 ?></td>
                    <td><?= $y8 == $x8 ? 1 : 0 ?></td>
                </tr>
            </tbody>
            <tfoot>
                <td colspan="9">
                    <?= "При гибком сравнении для различных типов сравнение происходит
                    после преобразования типа."  ?>
                </td>
            </tfoot>
        </table>

        <table>
            <caption>Задание 2.2. Жёсткое сравнение в PHP</caption>
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">
                        <?php
                        echo "true";
                        $x1 = true;
                        ?>
                    </th>
                    <th scope="col">
                        <?php
                        echo "false";
                        $x2 = false;
                        ?>
                    </th>
                    <th scope="col">
                        <?php
                        echo "1";
                        $x3 = 1;
                        ?>
                    </th>
                    <th scope="col">
                        <?php
                        echo "0";
                        $x4 = 0;
                        ?>
                    </th>
                    <th scope="col">
                        <?php
                        echo "-1";
                        $x5 = -1;
                        ?>
                    </th>
                    <th scope="col">
                        <?php
                        echo "\"1\"";
                        $x6 = "1";
                        ?>
                    </th>
                    <th scope="col">
                        <?php
                        echo "null";
                        $x7 = null;
                        ?>
                    </th>
                    <th scope="col">
                        <?php
                        echo "\"php\"";
                        $x8 = "php";
                        ?>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        <?php
                        echo "true";
                        $y1 = true;
                        ?>
                    </th>
                    <td><?= $y1 === $x1 ? 1 : 0 ?></td>
                    <td><?= $y1 === $x2 ? 1 : 0 ?></td>
                    <td><?= $y1 === $x3 ? 1 : 0 ?></td>
                    <td><?= $y1 === $x4 ? 1 : 0 ?></td>
                    <td><?= $y1 === $x5 ? 1 : 0 ?></td>
                    <td><?= $y1 === $x6 ? 1 : 0 ?></td>
                    <td><?= $y1 === $x7 ? 1 : 0 ?></td>
                    <td><?= $y1 === $x8 ? 1 : 0 ?></td>
                </tr>
                <tr>
                    <th scope="row">
                        <?php
                        echo "false";
                        $y2 = false;
                        ?>
                    </th>
                    <td><?= $y2 === $x1 ? 1 : 0 ?></td>
                    <td><?= $y2 === $x2 ? 1 : 0 ?></td>
                    <td><?= $y2 === $x3 ? 1 : 0 ?></td>
                    <td><?= $y2 === $x4 ? 1 : 0 ?></td>
                    <td><?= $y2 === $x5 ? 1 : 0 ?></td>
                    <td><?= $y2 === $x6 ? 1 : 0 ?></td>
                    <td><?= $y2 === $x7 ? 1 : 0 ?></td>
                    <td><?= $y2 === $x8 ? 1 : 0 ?></td>
                </tr>
                <tr>
                    <th scope="row">
                        <?php
                        echo "1";
                        $y3 = 1;
                        ?>
                    </th>
                    <td><?= $y3 === $x1 ? 1 : 0 ?></td>
                    <td><?= $y3 === $x2 ? 1 : 0 ?></td>
                    <td><?= $y3 === $x3 ? 1 : 0 ?></td>
                    <td><?= $y3 === $x4 ? 1 : 0 ?></td>
                    <td><?= $y3 === $x5 ? 1 : 0 ?></td>
                    <td><?= $y3 === $x6 ? 1 : 0 ?></td>
                    <td><?= $y3 === $x7 ? 1 : 0 ?></td>
                    <td><?= $y3 === $x8 ? 1 : 0 ?></td>
                </tr>
                <tr>
                    <th scope="row">
                        <?php
                        echo "0";
                        $y4 = 0;
                        ?>
                    </th>
                    <td><?= $y4 === $x1 ? 1 : 0 ?></td>
                    <td><?= $y4 === $x2 ? 1 : 0 ?></td>
                    <td><?= $y4 === $x3 ? 1 : 0 ?></td>
                    <td><?= $y4 === $x4 ? 1 : 0 ?></td>
                    <td><?= $y4 === $x5 ? 1 : 0 ?></td>
                    <td><?= $y4 === $x6 ? 1 : 0 ?></td>
                    <td><?= $y4 === $x7 ? 1 : 0 ?></td>
                    <td><?= $y4 === $x8 ? 1 : 0 ?></td>
                </tr>
                <tr>
                    <th scope="row">
                        <?php
                        echo "-1";
                        $y5 = -1;
                        ?>
                    </th>
                    <td><?= $y5 === $x1 ? 1 : 0 ?></td>
                    <td><?= $y5 === $x2 ? 1 : 0 ?></td>
                    <td><?= $y5 === $x3 ? 1 : 0 ?></td>
                    <td><?= $y5 === $x4 ? 1 : 0 ?></td>
                    <td><?= $y5 === $x5 ? 1 : 0 ?></td>
                    <td><?= $y5 === $x6 ? 1 : 0 ?></td>
                    <td><?= $y5 === $x7 ? 1 : 0 ?></td>
                    <td><?= $y5 === $x8 ? 1 : 0 ?></td>
                </tr>
                <tr>
                    <th scope="row">
                        <?php
                        echo "\"1\"";
                        $y6 = "1";
                        ?>
                    </th>
                    <td><?= $y6 === $x1 ? 1 : 0 ?></td>
                    <td><?= $y6 === $x2 ? 1 : 0 ?></td>
                    <td><?= $y6 === $x3 ? 1 : 0 ?></td>
                    <td><?= $y6 === $x4 ? 1 : 0 ?></td>
                    <td><?= $y6 === $x5 ? 1 : 0 ?></td>
                    <td><?= $y6 === $x6 ? 1 : 0 ?></td>
                    <td><?= $y6 === $x7 ? 1 : 0 ?></td>
                    <td><?= $y6 === $x8 ? 1 : 0 ?></td>
                </tr>
                <tr>
                    <th scope="row">
                        <?php
                        echo "null";
                        $y7 = null;
                        ?>
                    </th>
                    <td><?= $y7 === $x1 ? 1 : 0 ?></td>
                    <td><?= $y7 === $x2 ? 1 : 0 ?></td>
                    <td><?= $y7 === $x3 ? 1 : 0 ?></td>
                    <td><?= $y7 === $x4 ? 1 : 0 ?></td>
                    <td><?= $y7 === $x5 ? 1 : 0 ?></td>
                    <td><?= $y7 === $x6 ? 1 : 0 ?></td>
                    <td><?= $y7 === $x7 ? 1 : 0 ?></td>
                    <td><?= $y7 === $x8 ? 1 : 0 ?></td>
                </tr>
                <tr>
                    <th scope="row">
                        <?php
                        echo "\"php\"";
                        $y8 = "php";
                        ?>
                    </th>
                    <td><?= $y8 === $x1 ? 1 : 0 ?></td>
                    <td><?= $y8 === $x2 ? 1 : 0 ?></td>
                    <td><?= $y8 === $x3 ? 1 : 0 ?></td>
                    <td><?= $y8 === $x4 ? 1 : 0 ?></td>
                    <td><?= $y8 === $x5 ? 1 : 0 ?></td>
                    <td><?= $y8 === $x6 ? 1 : 0 ?></td>
                    <td><?= $y8 === $x7 ? 1 : 0 ?></td>
                    <td><?= $y8 === $x8 ? 1 : 0 ?></td>
                </tr>
            </tbody>
            <tfoot>
                <td colspan="9">
                    <?= "При жестком сравнении преобразование типа не происходит,
                    поскольку это включает сравнение типа, а также значения."  ?>
                </td>
            </tfoot>
        </table>
    </main>
</body>

</html>