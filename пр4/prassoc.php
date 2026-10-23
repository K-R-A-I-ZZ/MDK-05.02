<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Задача1</h2>
    <p>Слова: день, ночь, грусть, тело, еда, дождь, вода, утро, тяжесть, свобода</p>
    <?php 
        $word = ['' => 'day', 'night' => 'ночь', 'sad' => 'грусть', 'food' => 'еда', 'rain' => 'дождь',
         'water' => 'вода', 'body' => 'тело', 'morning' => 'утро', 'heavy' => 'тяжесть', 'freedom' => 'свобода'];
        foreach ($word as $key => $value) {
            echo "$key - $value <br>";
        }
    ?>
    <h2>задача2</h2>
    <form>
    <input name="word1">
    <input type="submit">
    </form>
    <?php 
        $word = ['day' => 'день', 'night' => 'ночь', 'sad' => 'грусть', 'food' => 'еда', 'rain' => 'дождь',
         'water' => 'вода', 'body' => 'тело', 'morning' => 'утро', 'heavy' => 'тяжесть', 'freedom' => 'свобода'];
         if (isset($_GET['word1'])){
    $G1 = $_GET['word1'];}
         $f = null;
         $i_f = false;
         foreach ($word as $eng => $ru) {
            if($ru === $G1) {
                $f = $eng;
                $i_f = true;
                break;
            }
         }
         if ($i_f) {
            echo "$G1 - $f <br>";
             }   else {
            echo "нет такого слова<br>";
            }
         
    ?>
    <h2>задача3</h2>
    <form>
    <input name="word2">
    <input type="submit">
    </form>
    <?php 
        $word = ['day' => 'день', 'night' => 'ночь', 'sad' => 'грусть', 'food' => 'еда', 'rain' => 'дождь',
         'water' => 'вода', 'body' => 'тело', 'morning' => 'утро', 'heavy' => 'тяжесть', 'freedom' => 'свобода'];
        if (isset($_GET['word2'])){
    $G2 = $_GET['word2'];}
         $translation = null;
         $i_f = false;
         foreach ($word as $eng => $rus) {
            if ($eng === $G2) {
                $translation = $rus;
                $i_f = true;
                break;
            }
         }

         if (!$i_f) {
            foreach ($word as $eng => $rus) {
                if ($rus === $G2) {
                    $translation = $eng;
                    $i_f = true;
                    break;
                }
            }
         }
         if ($i_f) {
            echo "$G2 - $translation <br>";
         }
         else {
            echo "нет такого слова <br>";
         }
    ?>
    <h2>Задача4</h2>
    <form>
    <input name="word3">
    <input type="submit">
    </form>
    <?php 
    $word = ['day' => 'день', 'night' => 'ночь', 'sad' => 'грусть', 'food' => 'еда', 'rain' => 'дождь',
         'water' => 'вода', 'body' => 'тело', 'morning' => 'утро', 'heavy' => 'тяжесть', 'freedom' => 'свобода'];
        if (isset($_GET['word3'])){
    $G3 = $_GET['word3'];}
    $translation = null;
         $i_f = false;
         foreach ($word as $eng => $rus) {
            if ($eng == $G3) {
                $translation = $rus;
                $i_f = true;
                break;
            }
         }

         if (!$i_f) {
            foreach ($word as $eng => $rus) {
                if ($rus == $G3) {
                    $translation = $eng;
                    $i_f = true;
                    break;
                }
            }
         }
         if ($i_f) {
            echo "$G3 - $translation <br>";
         }
         else {
            echo "нет такого слова <br>";
         }
    ?>
    <h2>Задание5</h2>
    <?php
        $string = "banana";
        $res = [];
        $length = strlen($string);
        for ($i = 0; $i < $length; $i++) {
            $char = $string[$i];
            if (isset($res[$char])) {
                $res[$char] = $res[$char] + 1;
            }
            else {
                $res[$char] = 1;
            }
        }
        $letters = array_keys($res);
        $uni = count($letters);
        for ($i = 0; $i < $uni; $i++) {
            $char = $letters[$i];
            $count = $res[$char];
            echo "'" . $char . "' => " . $count . "<br>";
        }
    ?>
    <h2>задача6</h2>
    <?php 

    ?>
</body>
</html>