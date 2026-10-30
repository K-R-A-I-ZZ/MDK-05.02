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
    <h2>функции с несколькими параметрами</h2>
    <?php 
        function fullname ($firstname, $lastname){
            echo "$firstname $lastname";
        }
        fullname ('вася', 'иванов');
    ?>
    <h2>функция с параметром по умолчанию</h2>
    <?php 
        function showuserinfo($firstname, $lastname, $role = 'user') {
            echo "<p>$firstname, $lastname, роль - $role</p>";
        }
        showuserinfo ('Коля', 'Петров', 'student');
        showuserinfo ('фывыф', 'as');
    ?>

    <h2>Возвращаемое значение</h2>
    <?php 
        function getuserinfo($firstname, $lastname, $role = 'user'){
            return "$firstname, $lastname, $role = user";
        }
        $info = getuserinfo ('Иван', 'Иванов',);
        echo $info, "<br>";
        function squareRect($l, $w) {
            return $l * $w;            
        }
        $s = squareRect(20, 40);
        $x = squareRect( 300, 20);
        echo "<br>", "площадь - " . $x;
    ?>
</body>
</html>