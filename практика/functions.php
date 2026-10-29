<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Функции</h1>
    <h2>создание и вызов функции</h2>
    <?php 
        function sayHello($name) {
            echo "<p>привет, $name!</p>";
        }
        sayHello('Вась');
        sayHello('Петь');
        sayHello('Игорь');
    ?>
</body>
</html>