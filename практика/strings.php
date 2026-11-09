<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Строки</h1>
    <h2>создание строк</h2>
    <?php 
        $str1 = 'hello';
        $str2 = "world";
    ?>
    <h2>соединение строк</h2>
    <?php 
        echo $str1 . ', ' . $str2 . '!';
    ?>
    <h2>обращение по индексу</h2>
    <?php 
        $sym = $str1[2];
        $str1[0] = 'w';
        echo $str1;
    ?>
    <h2>получение длины строки</h2>
    <?php 
        echo "длина строки 1 = " . strlen($str1) . " символам";
    ?>
</body>
</html>