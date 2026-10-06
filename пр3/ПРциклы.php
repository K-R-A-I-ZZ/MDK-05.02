<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ПР по циклам</h1>
    <h2>задача 1<br>переменные:<br>$startNumber = 2;<br> $multiplier = 3;<br>$quantity = 6;</h2>
    <?php 
    $startNumber = 2;
    $multiplier = 3;
    $quantity = 6;

    $currentNumber = $startNumber;

    for ($i = 0; $i < $quantity; $i++) {
        echo $currentNumber . " ";
        $currentNumber *= $multiplier;
    }

    ?>
    <h2>задача 2<br>переменные:<br>lastNumber<br>sum</h2>
    <?php 
    $lastNumber = 200;
    $sum = 0;
    for ($i = 1; $i <= $lastNumber; $i++) {
    $sum += $i;
    }
    echo "Сумма чисел от 1 до $lastNumber равна: $sum";
    ?>

    <h2>Задание 3<br>переменные:<br>$lastNumber<br>$multiplicationResult</h2>
    <?php 
    $lastNumber =6;
    $multiplicationResult = 1;
    for ($i = 1; $i <= $lastNumber; $i++) {
        if ($i % 2 === 0){
            $multiplicationResult *= $i;
        }
    }
    echo "произведение чётных чисел:" . $multiplicationResult;
    
    ?>

<h2>Задание 4</h2>
<?php 
$n = 5;
$DayDistant = 10;
$allDistante = 0;

for ($i = 1; $i <= $n; $i++) {
    $allDistante += $DayDistant;
    $DayDistant *= 1.10;
}
echo "суммарный путь за $n дней:" . round($allDistante,2) ."км";

?>
</body>
</html>