<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>задача1</h2>
    <p>радиус равен 5</p>
    <?php 
        function circumference($radius) {
            return 2 * 3.14 * $radius;
        }

        $radius = 5;
        echo 'длинна равна: ', circumference($radius)
    ?>
    <h2>задача2</h2>
    <form>
        Сторона А<input name="Side_a" type="number"><br><br>
        Сторона B<input name="Side_b" type="number"><br><br>
        Сторона C<input name="Side_c" type="number"><br><br>
    <input type="submit">
    </form>
    <?php 
        function squareArea ($a, $b, $c) {
            if (($a + $b <= $c) || ($a + $c <= $b) || ($b + $c <= $a)) {
                return 0;
            }
            $p = ($a + $b + $c) / 2;
            $res = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
            return $res;
        }
        if (isset($_GET['Side_a'])) {
            $a = $_GET['Side_a'];
            $b = $_GET['Side_b'];
            $c = $_GET['Side_c'];
        $r = squareArea($a, $b, $c);
        echo "ответ:" . $r;
        }
    ?>
    <h2>задача3</h2>
        <form>Число<input name="n">
        <input type="submit">
    </form>
    <?php 
        function maxDivisor ($n) {
            $i = $n - 1;
            while ($i >= 1) {
                if ($n % $i == 0) {
                    return $i;
                }
                $i = $i - 1;
            } 
            return 1;
        }
        if (isset($_GET['n'])) {
            $n = $_GET['n'];
            $r = maxDivisor($n);
            echo "наибольший делитель: " . $r;
        }
    ?>
    <h2>задача4</h2>
    <p>число: 12</p>
    <?php 
        function alldivisors ($num) {
            $s = [];
            for ($i = 1; $i <= $num; $i++) {
                if ($num % $i == 0) {
                    $s[] = $i;
                }
            }
            return $s;
        }
        $nu = 12;
        $mass_div = alldivisors($nu);
        echo "все делители числа" ;
        foreach ($mass_div as $d) {
            echo $d . " ";
        }
    ?>
    <h2>Задача5</h2>
    <?php 
        function sumOFsquares($arr) {
            $summ = 0;
            foreach ($arr as $ch) {
                $summ = $summ + ($ch * $ch);
            }
            return $summ;
        }
        $mass = [12, 5, 2, 69];
        $r = sumOFsquares($mass);
        echo "сумма квадратов: " . $r;
    ?>
    <h2>задача6</h2>
    <?php       
        function sonvertToString ($data) {
            $re = '';
            foreach ($data as $key => $value) {
                if (is_array($value)) {
                    $value = 'array';
                }
                $re = $re . $key . ': ' . $value . ', ';
            }
            return $re;
        }
    ?>
</body>
</html>