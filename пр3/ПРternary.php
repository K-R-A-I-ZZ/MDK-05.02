<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Задание1</h2>
    <p>$a = 2
       $b = 8</p>
    <?php
        $a = 2;
        $b = 8;
        $res = ($a > $b) ? ($a + $b) : ($a * $b);
        echo $res;
    ?>
    <h2>задание2</h2>
    <p>$n = 23</p>
    <?php
    $n = 23;
    echo ($n % 2 === 0) ?"чётное":"не чётное";
    ?>
    <h2>задание3</h2>
    <p>$sum = 1001</p>
    <?php
        $sum = 1001;
        $t = ($sum > 1000) ? ($sum * 0.9) : ($sum * 0.95);
        echo $t;
    ?>
    <h2>задание4</h2>
    <p> $a = 1
        $b = 3
        $c = 3</p>
    <?php
        $a = 1;
        $b = 3;
        $c = 3;
        echo ($a + $b > $c && $a + $c > $b && $b + $c > $a) ? 'Существует' : 'не существует';
    ?>
    <h2>задание5</h2>
    <p>$age = 10</p>
    <?php
    $age = 10;
        $ageGroup = ($age <= 1) ? 'котята' :
        (($age <= 3) ? 'молодые коты' :
        (($age <= 7) ? 'коты средних лет' : 'почтенные коты'));
        echo $ageGroup;
       
    ?>
    <br>
    <h2><b>Match</b></h2>
    <p>Задание1</p>
    <p>$d = 5</p>
    <?php
        $d = 5;
        $res = match ($d) {
        0 => 'zero',
        1=> 'one',
        2=> 'two',
        3=> 'three',
        4=> 'four',
        5=> 'five',
        6=> 'six',
        7=> 'seven',
        8=> 'eight',
        9=> 'nine',
        default => "незнаю"
        };
        echo $res;
    ?>
</body>
</html>