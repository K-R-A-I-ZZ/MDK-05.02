<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>задача1</h2>
    <p>$str = "hello (mad) world";</p>
    <?php 
        $str = "hello (mad) world";
        $length = strlen($str);
        $start = 0;
        $end = 0;
        for ($i = 0; $i < $length; $i++) {
            if ($str[$i] == '(') {
                $start = $i;
            }
        }
        for ($i = 0; $i < $length; $i++) {
            if ($str[$i] == ')') {
                $end = $i;
            }
        }
        for ($i = $start + 1; $i < $end; $i++) {
            echo $str[$i];
        }
    ?>
    <h2>задача2</h2>
    <p>$str = "it very very hard ";</p>
    <?php 
        $str = "it very very hard.";
        $length = strlen($str);
        $count = 0;
        for ($i = 0; $i < $length; $i++) {
            if ($str[$i] != ' ' && $str[$i] != '.') {
                if ($str[$i + 1] == ' ' || $str[$i + 1] == '.') {
                    $count++;
                }
            }
        }
        echo "Количество слов: " . $count;
    ?>
    <h2>задача3</h2>
    <p>$str = "seal steal pop test.";</p>
    <?php 
        $str = "seal steal pop test.";
        $length = strlen($str);
        $word = "";
        for ($i = 0; $i < $length; $i++) {
            if ($str[$i] != ' ' && $str[$i] != '.') {
                $word .= $str[$i];
            }
            else {
                if ($word != "") {
                    $wordlength = strlen($word);
                    if ($word[0] == $word[$wordlength - 1]) {
                        echo $word . " ";
                    }
                    $word = "";
                }
            }
        }
    ?>
    <h2>задача4</h2>
    <p>$str = "hello world"</p>
    <?php 
        $str = "helloworld";
        $uni = "";
        for ($i = 0; $i < strlen($str); $i++) {
            $char = $str[$i];
            $found = false;
            for ($j = 0; $j < strlen($uni); $j++) {
                if ($uni[$j] == $char) {
                    $found = true;
                    break;
                }
            }
            if (!$found) {
                $uni = $uni . $char;
            }
        }
    echo "кол-во различных символов: " . strlen($uni);
    ?>
    <h2>задача5</h2>
    <p>$str = "brbrkt"</p>
    <?php 
        $str = "brbrkt";
        $count = 0;
        for ($i = 0; $i < strlen($str); $i++) {
             $char = $str[$i];
            if ($char == 'r' || $char == 'k' || $char == 't') {
                $count++;
            }
        }
        echo "кол-во символов r, k, t: " . $count;
    ?>
    <h2>задача6</h2>
    <p></p>
    <?php 
        function delSpace($str) {
            $length = strlen($str);
            $res = "";
            for ($i = 0; $i < $length; $i++) {
                if ($str[$i] != ' ') {
                    $res .= $str[$i];
                } else {
                    $reslen = strlen($res);
                    if ($reslen > 0 && $res[$reslen - 1] != ' ') {
                        $res .= ' ';
                    }
                }
            }
            $reslen = strlen($res);
            if ($reslen > 0 && $res[$reslen - 1] == ' ') {
                $fin = "";
                for ($i = 0; $i < $reslen - 1; $i++) {
                    $fin .= $res[$i];
                }
                $res = $fin;
            }
            return $res;
        }
        $str =  " php  hard ";
        $t = delSpace($str);
        var_dump(str_replace(' ', '.', $str));
        echo "стало: " . $t;
    ?>
    <h2>задача7</h2>
    <p>str = "i real very sad"</p>
    <?php 
        $str = "i real very sad";
        $length = strlen($str);
        $currentlen = 0;
        $min = 999;
        $max = 0;
        for ($i = 0; $i < $length; $i++) {
            if ($str[$i] != ' ' && $str[$i] != '.') {
                $currentlen++;
            } else {
                if ($currentlen > 0) {
                    if ($currentlen > $max) {
                        $max = $currentlen;
                    }
                    if ($currentlen < $min) {
                        $min = $currentlen;
                    }
                    $currentlen = 0;
                }
            }
        }
        echo "минимальное количество символов: " . $min . "<br>";
        echo "максимальное количество символов" . $max; 
    ?>
    <h2>задача8</h2>
    <p>str = "popugaai aaaaaara."</p>
    <?php 
        $str = "popugaai aaaaaara.";
        $length = strlen($str);
        $current = 0;
        $max = 0;
        for ($i = 0; $i < $length; $i++) {
            if ($str[$i] == 'a') {
                $current++;
            } else {
                if ($current > $max) {
                    $max = $current;
                }
                $current = 0;
            }
        }
        if ($current > $max) {
            $max = $current;
        }
        echo "наибольшая цепочка: " . $max;
    ?>
</body>
</html>