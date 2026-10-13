<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Тернарный оператор</h1>
    <h2>пример 1</h2>
    <?php
        $a = 42;
        $b = 44;
        $res = $a < $b ? 'a меньше b' : 'a больше или равно b';
        echo $res;

    ?>
    <h2>пример 2 - максимум</h2>
    <?php
        $res1 = $a > $b ? $a : $b;
        echo "максимальное число $res1";
    ?>
    <h2>Оператор match</h2>
    <?php
        $c = 5;
        $res3 = match ($c) {
            1 => 'c = 1',
            2=> 'c = 2',
            5=> 'c = 5',
            10=> 'c = 10',
            15=> 'c = 15',
        };
        echo $res3;
    ?>
</body>
</html>