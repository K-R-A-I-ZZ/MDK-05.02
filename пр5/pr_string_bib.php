<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>задача1</h2>
    <p>str = "ehhhh (it) repeat"</p>
    <?php 
        $str = "ehhhh (it) repeat";
        $start = strpos($str, '(');
        $end = strpos($str, ')');
        $res = substr($str, $start + 1, $end - $start - 1);
        echo $res;
    ?>
    <h2>задача2</h2>
    <p>str = "repeat ok just do it."</p>
    <?php 
        $str = "repeat ok just do it.";
        $clean = rtrim($str, $characters = "\.");
        $ww = explode(" ", $clean);
        echo count($ww);
    ?>
    <h2>задача3</h2>
    <p>str = "radar pop repeat test"</p>
    <?php 
        $str = "radar pop repeat test";
        $words = explode(" ", $str);
        foreach ($words as $word) {
            if ($word != "" && $word[0] == substr($word, -1)) {
                echo $word . " ";
            }
        }
    ?>
     <h2>задача4</h2>
     <p>str = "helloworldidk"</p>
     <?php 
        $str = "helloworldidk";
        $u = count_chars($str, 3);
        echo "уникальные символы " . $u . "<br>";
        echo "кол-во символов " . strlen($u);
     ?>
     <h2>задача5</h2>
     <p>str = "brbrkt"</p>
     <?php 
        $str = "brbrkttt";
        $countr = substr_count($str, 'r');
        $countk = substr_count($str, 'k');
        $countt = substr_count($str, 't');
        echo "букв r: " . $countr . "<br>";
        echo "букв k: " . $countk . "<br>";
        echo "букв t: " . $countt;
     ?>
     <h2>задача6</h2>
     <p>ehhhh repeatirion is mother of learning</p>
     <?php
        $str = "ehhhh repeatirion is mother of learning";
        $word = str_word_count($str, 1);
        $length = array_map('strlen', $word);
        echo "самое короткое слово: " . min($length) . "символов, <br>";
        echo "самое длинное слово: " . max($length) . "символов";
     ?>
     <h2>задача7</h2>
     <p>$str = "ara aaaaaara"</p>
     <?php 
        $str = "ara aaaaaara";
     ?>
</body>
</html>