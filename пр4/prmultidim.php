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
</body>
</html>