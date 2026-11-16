<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Стфндартные функции для строк</h1>
    <h2>strlen</h2>
    <?php 
        $str = "Hi mad world";
        $strR = "Привет безумный мир";
        echo "длинна 1-ой строки " . strlen($str) . " символов<br>";
        echo "длинна русской строки -" . mb_strlen($strR) . " символов"
    ?>
    <h2>поиск символа в строке - strpos и mb_strpos</h2>
    <?php 
        $strTemp = strpos($str, 'world');
        echo "позиция world - $strTemp <br>";
        $strTemp = mb_strpos($strR, 'мир');
        echo "позиция мир - $strTemp";
    ?>
    <h2>изменение регистра - strtolower и mb_strtolower</h2>
    <?php 
        $strtolow = strtolower($str);
        echo "строка в нижнем регистре - $strtolow<br>";
        $strtolowr = mb_strtolower($strR);
        echo "строка в нижнем регистре - $strtolowr";
    ?>
    <h2>возвращает подстроку - substr</h2>
    <?php 
        echo substr($str, 7, 3) . '<br>';
    ?>
    <h2>переворот strrev</h2>
    <?php 
        echo strrev($str);
    ?>
    <h2>превращение строки в массив explode</h2>
    <?php 
        $str3 = 'работа со строками';
        $arr = explode(' ', $str3);
        var_dump($arr);
    ?>
</body>
</html>