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
    <h2>задача1</h2>
    <form>
    <input name="digit">
    <input type="submit">
    </form>
    <?php 
    
    if (isset($_GET['digit'])){
    $digit = intval ($_GET['digit']);

    $res = match ($digit) {
        0 => 'zero',
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
        7 => 'seven',
        8 => 'eight',
        9 => 'nine',
        default => "незнаю",
    };
        echo "результат:" .$res;
    }
    ?>

    <h2>задача2</h2>
    <form>
    <input name="month">
    <input type="submit">
    </form>
    <?php 
        if (isset($_GET['month'])) {
    $month = intval ($_GET['month']);
    
    $h = match ($month) {
        1 => "1 января: новый год, 7 января: рождество <br>",
        2 => "23 февраля - день защитника отечества <br>",
        3 => "8 марта - женский день <br>",
        4 => "1 апреля - день дурака <br>",
        5 => "9 мая- день победы <br>",
        6 => "1 июня - день защиты детей <br>",
        7 => "3 июля - День ГИБДД МВД <br>",
        8 => "2 августа - день вдв",
        9 => "1 сентября - день знаний <br>",
        10 => "5 октября - День учителя <br>",
        11 => "4 ноября — День народного единства <br>",
        12 => "1 декабря — Всемирный день борьбы со СПИДом <br>",
        default => "нет такого месяца",
    };
    echo "праздники:<br>" .$h;
        }
    ?>
    <h2>задача3</h2>
    <form>
    <input name="num">
    <input type="submit">
    </form>
    <?php
        if (isset($_GET['num'])) {
    $last_d = abs (intval ($_GET['num'])) % 10;

    $square = match ($last_d) {
        0 => 0,
        1, 9 => 1,
        2, 8 => 4,
        3, 7 => 9,
        4, 6 => 6,
        5 => 5,

    };
    echo "результат" .$square;
        }

    ?>

    <h2>задача4</h2>
    <form>
    <input name="age">
    <input type="submit">
    </form>
    <?php 
        if (isset($_GET['age'])) {
            $k = intval ($_GET['age']);
        if ($k >= 1 && $k <=99) {
            $w = match (true) {
                ($k % 100 >= 11 && $k % 100 <= 14) => "лет",
                ($k % 10 === 1) => "год",
                ($k % 10 >= 2 && $k % 10 <= 4) => "года",
                default => "лет",
            };
            echo "Результат: Мне " .$k ."".$w;
        } else {
            echo "введи число от 1 до 99";
        }
        }
    
    ?>
    
</body>
</html>