<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Массивы</h1>
    <?php 
        $nums = [2, 44, 3, 7, 12];
        echo "4й элемент массива - $nums[4] ";
        $nums[2] = '!!!'; 
    ?>
    <h2>Изменение элементов</h2>
    <?php 
        $nums[2] = '!!!';
        echo "3й элемент массива - $nums[2] "; 
    ?>
    <h2>вывод на экран</h2>
    <?php 
        for($i = 0; $i < count($nums); $i++){
            echo $nums[$i], ' ';
        }      
    ?>
    <h2>цикл foreach</h2>
    <?php 
        foreach ($nums as $num) {
            echo $num, ' ';
        }
    ?>
    <h2>цикл foreach с индексами</h2>
    <?php 
        foreach ($nums as $key => $value) {
            echo "$key - $value <br> ";
        }
    ?>
    <h2>поиск максимума</h2>
    <?php 
        $max = $nums[0];
        foreach ($nums as $num) {
            if($num > $max){
                $max = $num;
            }
        }
        echo "максимум = $max"
    ?>
    <h2>добавление элемента</h2>
    <?php 
        $nums [] = 42;
    ?>
</body>
</html>