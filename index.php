<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Старт в PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" />
</head>
<body>

    <div class="container">

        <!--Таблица истинности-->
        <div class ="container__table">
            <h2>Таблица истинности PHP</h2>

            <table>
            <tr>
                <th>A</th>
                <th>B</th>
                <th>!A</th>
                <th>A || B</th>
                <th>A && B</th>
                <th>A xor B</th>
            </tr>

            <!-- a = 0, b = 0-->
            <tr>
                <td>
                    <?php echo $a = 0 ?>
                </td>
                <td>
                    <?php echo $b = 0 ?>
                </td>
                <td>
                    <?php echo !$a ?>
                </td>
                <td>
                    <?php echo (int)($a || $b) ?>
                </td>
                <td>
                    <?php echo (int)($a && $b) ?>
                </td>
                <td>
                    <?php echo (int)($a xor $b) ?>
                </td>
            </tr>

            <!-- a = 0, b = 1-->

            <tr>
                <td>
                    <?php echo $a = 0 ?>
                </td>
                <td>
                    <?php echo $b = 1 ?>
                </td>
                <td>
                    <?php echo (int)(!$a) ?>
                </td>
                <td>
                    <?php echo (int)($a || $b) ?>
                </td>
                <td>
                    <?php echo (int)($a && $b) ?>
                </td>
                <td>
                    <?php echo (int)($a xor $b) ?>
                </td>
            </tr>

            <!-- a = 1, b = 0-->

            <tr>
                <td>
                    <?php echo $a = 1 ?>
                </td>
                <td>
                    <?php echo $b = 0 ?>
                </td>
                <td>
                    <?php echo (int)(!$a) ?>
                </td>
                <td>
                    <?php echo (int)($a || $b) ?>
                </td>
                <td>
                    <?php echo (int)($a && $b) ?>
                </td>
                <td>
                    <?php echo (int)($a xor $b) ?>
                </td>
            </tr>

            <!-- a = 1, b = 1-->

            <tr>
                <td>
                    <?php echo $a = 1 ?>
                </td>
                <td>
                    <?php echo $b = 1 ?>
                </td>
                <td>
                    <?php echo (int)(!$a) ?>
                </td>
                <td>
                    <?php echo (int)($a || $b) ?>
                </td>
                <td>
                    <?php echo (int)($a && $b) ?>
                </td>
                <td>
                    <?php echo (int)($a xor $b) ?>
                </td>
            </tr>
            </table>
        </div>
    <!--Гибкое сравнение-->
    
        <div class ="container__table">
            <h2>Гибкое сравнение в PHP</h2>

            <table>
            <tr>
                <th></th>
                <th>true
                <?php $x1 = true ?>
                </th>

                <th> false
                <?php $x2 = false ?>
                </th>
                <th>1
                <?php $x3 = 1 ?>
                </th>
                <th>0
                <?php $x4 = 0 ?>
                </th>
                <th>-1
                <?php $x5 = -1 ?>
                </th>
                <th>"1"
                <?php $x6 = "1" ?>
                </th>
                <th>null
                <?php $x7 = null ?>
                </th>
                <th>"php"
                <?php $x8 = "php" ?>
                </th>
            </tr>

            <tr>
                <th>true
                <?php $y1 = true ?>
                </th>
                <td>
                    <?php echo $y1 == $x1 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y1 == $x2 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y1 == $x3 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y1 == $x4 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y1 == $x5 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y1 == $x6 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y1 == $x7 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y1 == $x8 ? 'true' : 'false'?>
                </td>
            </tr>

            <tr>
                <th>false
                <?php $y2 = false ?>
                </th>
                <td>
                    <?php echo $y2 == $x1 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y2 == $x2 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y2 == $x3 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y2 == $x4 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y2 == $x5 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y2 == $x6 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y2 == $x7 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y2 == $x8 ? 'true' : 'false'?>
                </td>
            </tr>

            <tr>
                <th>1
                <?php $y3 = 1 ?>
                </th>
                <td>
                    <?php echo $y3 == $x1 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y3 == $x2 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y3 == $x3 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y3 == $x4 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y3 == $x5 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y3 == $x6 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y3 == $x7 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y3 == $x8 ? 'true' : 'false'?>
                </td>
            </tr>

            <tr>
                <th>0
                <?php $y4 = 0 ?>
                </th>
                <td>
                    <?php echo $y4 == $x1 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y4 == $x2 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y4 == $x3 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y4 == $x4 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y4 == $x5 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y4 == $x6 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y4 == $x7 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y4 == $x8 ? 'true' : 'false'?>
                </td>
            </tr>


            <tr>
                <th>-1
                <?php $y5 = -1 ?>
                </th>
                <td>
                    <?php echo $y5 == $x1 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y5 == $x2 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y5 == $x3 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y5 == $x4 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y5 == $x5 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y5 == $x6 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y5 == $x7 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y5 == $x8 ? 'true' : 'false'?>
                </td>
            </tr>

            <tr>
                <th>"1"
                <?php $y6 = "1" ?>
                </th>
                <td>
                    <?php echo $y6 == $x1 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y6 == $x2 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y6 == $x3 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y6 == $x4 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y6 == $x5 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y6 == $x6 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y6 == $x7 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y6 == $x8 ? 'true' : 'false'?>
                </td>
            </tr>

            <tr>
                <th>null
                <?php $y7 = null ?>
                </th>
                <td>
                    <?php echo $y7 == $x1 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y7 == $x2 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y7 == $x3 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y7 == $x4 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y7 == $x5 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y7 == $x6 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y7 == $x7 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y7 == $x8 ? 'true' : 'false'?>
                </td>
            </tr>

            <tr>
                <th>"php"
                <?php $y8 = "php" ?>
                </th>
                <td>
                    <?php echo $y8 == $x1 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y8 == $x2 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y8 == $x3 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y8 == $x4 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y8 == $x5 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y8 == $x6 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y8 == $x7 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y8 == $x8 ? 'true' : 'false'?>
                </td>
            </tr>

            </table>
        </div>
    <!--Жесткое сравнение-->

        <div class="container__table">
            <h2>Жёсткое сравнение в PHP</h2>
            <table>
            <tr>
                <th></th>
                <th>true
                <?php $x1 = true ?>
                </th>

                <th> false
                <?php $x2 = false ?>
                </th>
                <th>1
                <?php $x3 = 1 ?>
                </th>
                <th>0
                <?php $x4 = 0 ?>
                </th>
                <th>-1
                <?php $x5 = -1 ?>
                </th>
                <th>"1"
                <?php $x6 = "1" ?>
                </th>
                <th>null
                <?php $x7 = null ?>
                </th>
                <th>"php"
                <?php $x8 = "php" ?>
                </th>
            </tr>

            <tr>
                <th>true
                <?php $y1 = true ?>
                </th>
                <td>
                    <?php echo $y1 === $x1 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y1 === $x2 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y1 === $x3 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y1 === $x4 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y1 === $x5 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y1 === $x6 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y1 === $x7 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y1 === $x8 ? 'true' : 'false'?>
                </td>
            </tr>

            <tr>
                <th>false
                <?php $y2 = false ?>
                </th>
                <td>
                    <?php echo $y2 === $x1 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y2 === $x2 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y2 === $x3 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y2 === $x4 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y2 === $x5 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y2 === $x6 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y2 === $x7 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y2 === $x8 ? 'true' : 'false'?>
                </td>
            </tr>

            <tr>
                <th>1
                <?php $y3 = 1 ?>
                </th>
                <td>
                    <?php echo $y3 === $x1 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y3 === $x2 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y3 === $x3 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y3 === $x4 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y3 === $x5 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y3 === $x6 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y3 === $x7 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y3 === $x8 ? 'true' : 'false'?>
                </td>
            </tr>

            <tr>
                <th>0
                <?php $y4 = 0 ?>
                </th>
                <td>
                    <?php echo $y4 === $x1 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y4 === $x2 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y4 === $x3 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y4 === $x4 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y4 === $x5 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y4 === $x6 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y4 === $x7 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y4 === $x8 ? 'true' : 'false'?>
                </td>
            </tr>


            <tr>
                <th>-1
                <?php $y5 = -1 ?>
                </th>
                <td>
                    <?php echo $y5 === $x1 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y5 === $x2 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y5 === $x3 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y5 === $x4 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y5 === $x5 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y5 === $x6 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y5 === $x7 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y5 === $x8 ? 'true' : 'false'?>
                </td>
            </tr>

            <tr>
                <th>"1"
                <?php $y6 = "1" ?>
                </th>
                <td>
                    <?php echo $y6 === $x1 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y6 === $x2 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y6 === $x3 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y6 === $x4 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y6 === $x5 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y6 === $x6 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y6 === $x7 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y6 === $x8 ? 'true' : 'false'?>
                </td>
            </tr>

            <tr>
                <th>null
                <?php $y7 = null ?>
                </th>
                <td>
                    <?php echo $y7 === $x1 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y7 === $x2 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y7 === $x3 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y7 === $x4 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y7 === $x5 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y7 === $x6 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y7 === $x7 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y7 === $x8 ? 'true' : 'false'?>
                </td>
            </tr>

            <tr>
                <th>"php"
                <?php $y8 = "php" ?>
                </th>
                <td>
                    <?php echo $y8 === $x1 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y8 === $x2 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y8 === $x3 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y8 === $x4 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y8 === $x5 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y8 === $x6 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y8 === $x7 ? 'true' : 'false'?>
                </td>
                <td>
                    <?php echo $y8 === $x8 ? 'true' : 'false'?>
                </td>
            </tr>

            </table>
        </div>
    </div>
</body>
</html>


