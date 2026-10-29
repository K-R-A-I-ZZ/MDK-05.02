<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>задача1</h2>
    <?php 
        $M = [[10, 15, 20, 25],
            [30, 35, 40, 45], 
        [50, 55, 60, 65]];
        echo "<table border='1'";
        foreach($M as $R) {
            echo "<tr>";
            foreach ($R as $value) {
                echo "<td>" . $value . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>"
    ?>
    <h2>задача2</h2>
    <?php 
        $S = [];
        $CR = 0;
        for ($n = 10; $n <= 99; $n++) {
            $S[$CR][] = $n * $n;
            if(count($S[$CR]) == 10) {
                $CR++;
            }
        }
        echo "<table border='1'>";
        foreach ($S as $R) {
            echo "<tr>";
            foreach($R as $val) {
                echo "<td>" . $val . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
    <h2>Задача3</h2>
    <?php 
        $m = [[1, 23, 69, 3, 9], 
        [23, 5, 8, 11, 2],
        [11, 87, 45, 52, 7],
        [145, 33, 0, 9, 17]];
        $maxv = $m[0][0];
        $maxr = 0;
        $maxc = 0;
        $minv = $m[0][0];
        $minr = 0;
        $minc = 0;
        foreach ($m as $rindex => $r) {
            foreach ($r as $colindex => $value) {
                if ($value > $maxv) {
                    $maxv = $value;
                    $maxr = $rindex;
                    $maxc = $colindex;
                }
                if ($value < $minv) {
                    $minv = $value;
                    $minr = $rindex;
                    $minc = $colindex;
                }
            }
        }
        echo "максимальный элемент:" . $maxv . "(строка: " . $maxr . "столбец:" . $maxc . ")\n";
        echo "минимальный элемент:" . $minv . "(строка: " . $minr . "столбец:" . $minc . ")\n";
    ?>
    <h2>задача4</h2>
    <form>
    <input name="nume">
    <input type="submit">
    </form>
    <?php 
         if (isset($_GET['nume'])){
    $n = $_GET['nume'];}
    $m1 = [];
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($i > $j) {
                $diff = $i - $j;
            }
            else {
                $diff = $j - $i;
            }
            $m1[$i][$j] = $diff;
        }
    }
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            echo $m1[$i][$j] . " ";
        }
        echo "<br>";
    }
    ?>
    <h2>задача5</h2>
    <?php 
        $sports = [
            "одежда" => ["nike", ""]
        ]
    ?>
</body>
</html>