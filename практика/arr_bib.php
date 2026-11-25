<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Функции для массивов</h1>
    <h2>array_first</h2>
    <?php 
        $nums = [2, 43, 5, 77, 8];
       // echo array_first($nums); // php>8.5
    ?>
    <h2>слияние массивов array_merge()</h2>
    <?php 
        $nums2 = [4, 34, 5];
        $res = array_merge($nums, $nums2);
        var_dump($res);
    ?>
    <h2>замена ключей и значений местами frray_flip</h2>
    <?php 
        var_dump(array_flip($nums));
    ?>
    <h2>поиск элемента array_search</h2>
    <?php 
        echo array_search(77, $nums);
    ?>
    <h2>переворот array_reverse</h2>
    <?php 
        var_dump(array_reverse($nums));
    ?>
    <h2>Функции изменяющие массив sort</h2>
    <?php 
        sort($nums);
        var_dump($nums);
    ?>
    <h2>перемешивание shuffle</h2>
    <?php 
        shuffle($nums);
        var_dump($nums);
    ?>
    <h2>применение функции к каждому элементу массива arrray_map</h2>
    <?php 
        $nums = [2, -43, 5, -77, 8];
        function double($a) {
            return $a * 2;
        }
        $doubleNums = array_map ('double', $nums);
        var_dump($doubleNums);
    ?>
    <h2>array_filter фильтрация массива</h2>
    <?php 
        function isPositive($a) {
            return $a > 0;
        }
        var_dump(array_filter($nums, 'isPositive'));
    ?>
    <h2>array_reduce получение одного значения</h2>
    <?php 
        function sum ($summ, $a) {
            return $summ + $a;
        }
        echo array_reduce($nums, 'sum');
    ?>
    <h2>пользовательская сортировка usort</h2>
    <?php 
        $strings = [
            'one', 'two', 'three', 'four'
        ];
        function compare($a, $b) {
            $la = strlen($a);
            $lb =strlen($b);
            if ($la > $lb) return 1;
            elseif($la == $lb) return 0;
            else -1;
        }
        usort($strings, 'compare');
        var_dump($strings, '<br>');
        echo "обычная сортировка <br>";
        sort($strings);
        var_dump($strings);
    ?>
    <h2>array_walk</h2>
    <?php 
        function square($a, $i) {
            return $a **= 2;
        }
        array_walk($nums, 'square');
        var_dump($nums)
    ?>
</body>
</html>