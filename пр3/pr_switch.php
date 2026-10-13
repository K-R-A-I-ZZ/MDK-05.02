<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>задание 1</h2>
    <form>
    <input name="number">
    <input type="submit">
    </form>
    <?php
    if (isset($_GET['number'])){
    $i = $_GET['number'];
       switch ($i) {
        case 0:
            echo"0 - zero ";
            break;
        case 1:
            echo"1 - one ";
            break;
        case 2:
            echo"2 - two ";
            break;
        case 3:
            echo"3 - three ";
            break;
        case 4:
            echo"4 - four ";
            break;
        case 5:
            echo "5 - five >";
            break;
        case 6:
            echo "6 - six ";
            break;
        case 7:
            echo "7 - seven ";
        break;
        case 8:
            echo "8 - eight ";
        break; 
        case 9:
            echo "9 - nine ";
            break;
        default:
            echo "хз";
       }
    }
    ?>
    <h2>задание 2</h2>
    <form>
        <input name="month">
        <input type="submit">
    </form>
    <?php
    if (isset($_GET['month'])) {
        $i = $_GET ['month'];
       switch ($i) {
        case 1:
            echo"1 января: новый год, 7 января: рождество <br>";
            break;
        case 2:
            echo"23 февраля - день защитника отечества <br>";
            break;
        case 3:
            echo"8 марта - женский день <br>";
            break;
        case 4:
            echo"1 апреля - день дурака <br>";
            break;
        case 5:
            echo"9 мая- день победы <br>";
            break;
        case 6:
            echo "1 июня - день защиты детей <br>";
            break;
        case 7:
            echo "3 июля - День ГИБДД МВД <br>";
            break;
        case 8:
            echo "2 августа - день вдв <br>";
        break;
        case 9:
            echo "1 сентября - день знаний <br>";
        break; 
        case 10:
            echo "5 октября - День учителя <br>";
            break;
            case 11:
            echo "4 ноября — День народного единства <br>";
            break;
            case 12:
            echo "1 декабря — Всемирный день борьбы со СПИДом <br>";
            break;
       }
    }
       ?>
       <h2>задание3</h2>
       
       <?php
            $i = 127;
            $last = abs($i) % 10; 
            switch ($last) {
                
            }


                   
       ?>
       
</body>
</html>