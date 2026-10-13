<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
</head>
<body>
    <h1>Оператор выбора - switch</h1>
    <form>
        <p>введите число:</p>
        <input name="number">
        <input type="submit">
    </form>
    <?php
    if (isset($_GET['number'])){
    $n = $_GET['number'];
        switch ($n) {
             case 1:
                 echo"n = 1";
                 break;
                  case 2:
                 echo"n = 2";
                  break;
                 case 5:
                 echo"n = 5";
                 break;
                 case 10:
                 echo"n = 10";
                 break;
                 case 15:
                 echo"n = 15";
                 break;
             default:
                echo "ничего не совпало";
        }
    }else{
        echo "данные не получены";
    }
    ?>
</body>
</html>