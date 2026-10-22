<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ассоциативные массивы</h1>
    <h2>создание массива</h2>
    <?php 
        $nums = ['one' => 12, 'two' => 54, 'three' => 3, 'four' => 55, 'five' => 42];
    ?>
    <h2>Вывод массива</h2>
    <?php 
        foreach ($nums as $num) {
            echo $num, ', ';
        }
    ?>
    <h2>Обращение к элементам массива</h2>
    <?php 
        echo 'второй элемент массива - ' . $nums['two'];
        $nums['two'] = 555;
    ?>
    <h2>создание элемента массива</h2>
    <?php 
        $nums['six'] = 34;
        $nums[] = 8;
        $nums[5] = 77;
        $nums[] = 22;
    ?>
    <h2>перебор массива с ключами</h2>
    <?php 
        foreach ($nums as $key => $value) {
            echo "$key - $value <br>";
        }
    ?>
    <h2>строка</h2>
    <?php 
        $str = 'qwerty';
        echo $str[1];
    ?>
</body>
</html>