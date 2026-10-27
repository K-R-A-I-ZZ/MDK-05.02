<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Многомерные массивы</h1>
    <h2>Объявление</h2>
    <?php 
        $students = [['Иванов', 'Иван'], ['Петров', 'Пётр'], ['Сидоров', 'Вова']];
    ?>
    <h2>Вывод на экран</h2>
    <?php 
        foreach ($students as $student) {
            foreach ($student as $name) {
                echo $name, ' ';
            }
            echo '<br>';
        }
    ?>
    <h2>ассоциативный массив</h2>
    <?php 
        $students = [['second name' => 'Иванов', 'first name' => 'Иван'], ['second name' => 'Петров', 'first name' => 'Пётр'],
         ['second name' =>'Сидоров', 'first name' => 'Вова']];
         foreach ($students as $student) {
            echo '<p>' . $student['second name'], ' '
            . $student['first name'] . '</p>';
        }
    ?>
    <h2>обращение к элементу</h2>
    <?php 
        echo $students[0]['first name'];

    ?>
    <h2>ещё пример с асс массивами</h2>
    <?php 
        $college = ['iv1k-25' => [['second name' => 'Иванов', 'first name' => 'Иван'], ['second name' => 'Петров', 'first name' => 'Пётр'],
         ['second name' =>'Сидоров', 'first name' => 'Вова']], 'iv1-25' => [['second name' =>'Сидоров', 'first name' => 'Вова']]];
         foreach($college as $key => $groupe) {
            echo "<h3>Группа: $key</h3>";
            foreach($groupe as $student){
                echo '<p>' . $student['second name'] .' ' .$student['first name'] . '</p>';
            }
         }

    ?>
</body>
</html>