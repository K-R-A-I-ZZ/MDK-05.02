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
        $str = "it very very hard ";
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
        $str = "hello world";
        
    ?>
</body>
</html>