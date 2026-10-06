<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
    <h2>Задача1</h2>
<table border="1">
<?php
for ($i = 1; $i < 10; $i++)
{
    echo "<tr>";
    for ($j = 1; $j < 10; $j++)
    {
        echo "<td>" . $i * $j . "</td>";
    }
    echo "</tr>";
}
?>
</table>
<h2>задача2</h2>
<?php
$a = 4;
$b = 3;
for ($i = 0; $i < $b; $i++) {
    for ($j = 0; $j < $a; $j++) {
        echo "x";
    }
    echo "<br>";
}

?>
<h2>задача4</h2>
<table>
    <tr>
        <th>число</th>
        <th>квадрат числа</th>
    </tr>
<?php for ($i = 10; $i <= 99; $i++) ?>
    <tr>
        <td><?php echo </td>
        <td></td>
    </tr>
?>
</table>
</body>
</html>