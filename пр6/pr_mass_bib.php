<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>задача1</h2>
    <p>num = [69, 14, 228, 0, 10]</p>
    <?php 
        $num = [69, 14, 228, 0, 10];
        $res = array_slice($num, 0, array_search(0, $num) + 1);  //array_slice Выбирает срез массива и возвращает последовательность элементов массива array, определённую параметрами offset и length//
        print_r($res); //array_search() будет искать идентичные элементы в массиве haystack, если третьему параметру strict установили значение true.//
    ?>
    <h2>задача2</h2>
    <p>num = [69, 14, 228, 42, 10]</p>
    <?php 
        $num = [69, 14, 228, 42, 10];
        function multiply($carry, $item) { //carry это переменная хранящая в себе промежуточный результат вычислений//
           return $carry * $item; //Параметр содержит результирующее значение предыдущей итерации; при первой итерации содержит значение параметра initial.//
        } //При передаче аргумента initial функция использует значение аргумента в начале процесса, 1 - initial в данном случае//
        $res = array_reduce($num, 'multiply', 1); //Функция array_reduce() итеративно применяет callback-функцию к элементам массива array, чем сводит массив к единственному значению.//
        echo $res; 
    ?>
    <h2>задача3</h2>
    <p></p>
    <?php 
        
    ?>
</body>
</html>