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
</body>
</html>