<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>задание1</h2>
    <p>массив [1 22 2 40 69]</p>
    <?php 
        $nums = [1, 22, 2, 40, 69];
        $max = $nums[0];
        $min = $nums[0];
        $max_i = 0;
        $min_i = 0;
        foreach ($nums as $key => $num) {
            if($num > $max){
                $max = $num;
                $max_i = $key;
            }
            if($num < $min){
                $min = $num;
                $min_i = $key;
            }
        }
        echo "максимум = $max (индекс $max_i) минимум = $min (индекс $min_i)"
    ?>
    <h2>задание2</h2>
    <p>массив [1 22 2 40 69]</p>
    <?php 
     $nums = [1, 22, 2, 40, 69];
     $sum = 0;
     $p = 1;
     for ($i = 0; $i < count($nums); $i++) {
        $sum = $sum + $nums[$i];
        $p = $p * $nums[$i];
     }
     echo  "Сумма: " . $sum . "\n";
     echo "произведение: " . $p . "\n";
     
    ?>
    <h2>Задача3</h2>
    <p>массив [1 22 2 40 69]</p>
    <?php 
        $nums = [1, 22, 2, 40, 69];
        $sum = 0;
        $co = count($nums);
        for($i =0; $i < $co; $i++) {
            $sum = $sum + $nums[$i];
        }
        $ave = $sum / $co;
        echo "сред арифм: " . $ave . "\n"
    ?>
    <h2>Задача4</h2>
    <p>массив [2.5 -3.4 4 -1.2 0]</p>
    <?php 
        $o = [2.5, -3.4, 4.0, -1.2, 0.0];
        $res = [];
        for ($i = 0; $i < count($o); $i++) {
            $num = $o[$i];
            if($num > 0) {
                $res[] = $num * $num;
            }
            else {
                $res[] = -$num;
            }
        }
        echo "ответ: ";
        for($i = 0; $i < count($res); $i++) {
            echo $res[$i] . " ";
        }
        echo "\n"
    ?>
    <h2>Задача5</h2>
    <p>массив [1 22 2 40 69]</p>
    <?php 
         $nums = [1, 22, 2, 40, 69];
         for($i = 0; $i < count($nums); $i = $i + 2) {
            echo "Индекс " . $i . "=>" . $nums[$i] . "\n";
         }
    ?>
    <h2>Задача6</h2>
    <p>массив [1 22 2 40 69]</p>
    <?php 
        $nums = [1, 22, 2, 40, 69];
        for($i = 1; $i < count($nums); $i++) {
            if ($nums[$i] > $nums[$i - 1]) {
                echo $nums[$i] . "больше" . $nums[$i - 1] . "\n";
            }
        }
    ?>
</body>
</html>