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
        $word = ['day' => 'день', 'night' => 'ночь', 'sad' => 'грусть', 'food' => 'еда', 'rain' => 'дождь',
         'water' => 'вода', 'body' => 'тело', 'morning' => 'утро', 'heavy' => 'тяжесть', 'freedom' => 'свобода'];
        foreach ($word as $key => $value) {
            echo "$key - $value <br>";
        }
    ?>
    <h2>задача2</h2>
    <p>слово: свобода</p>
    <?php 
        $word = ['day' => 'день', 'night' => 'ночь', 'sad' => 'грусть', 'food' => 'еда', 'rain' => 'дождь',
         'water' => 'вода', 'body' => 'тело', 'morning' => 'утро', 'heavy' => 'тяжесть', 'freedom' => 'свобода'];
         $G = "свобода";
         $f = null;
         $i_f = false;
         foreach ($word as $eng => $ru) {
            if($ru === $G) {
                $f = $eng;
                $i_f = true;
                break;
            }
         }
         if ($i_f) {
            echo "$G - $f <br>";
             }   else {
            echo "нет такого слова<br>";
            }
         
    ?>
    <h2>задача3</h2>
    <p>Слово: свобода</p>
    <?php 
        $word = ['day' => 'день', 'night' => 'ночь', 'sad' => 'грусть', 'food' => 'еда', 'rain' => 'дождь',
         'water' => 'вода', 'body' => 'тело', 'morning' => 'утро', 'heavy' => 'тяжесть', 'freedom' => 'свобода'];
         $G = "свобода";
         $translation = null;
         $i_f = false;
         foreach ($word as $eng => $rus) {
            if ($eng === $G) {
                $translation = $rus;
                $i_f = true;
                break;
            }
         }

         if (!$i_f) {
            foreach ($word as $eng => $rus) {
                if ($rus === $G) {
                    $translation = $eng;
                    $i_f = true;
                    break;
                }
            }
         }
         if ($i_f) {
            echo "$G - $translation <br>";
         }
         else {
            echo "нет такого слова <br>";
         }
    ?>
    <h2>Задача4</h2>
    <form>
    <input name="word">
    <input type="submit">
    </form>
    <?php 
    $word = ['day' => 'день', 'night' => 'ночь', 'sad' => 'грусть', 'food' => 'еда', 'rain' => 'дождь',
         'water' => 'вода', 'body' => 'тело', 'morning' => 'утро', 'heavy' => 'тяжесть', 'freedom' => 'свобода'];
        if (isset($_GET['word'])){
    $G = $_GET['word'];}
    $translation = null;
         $i_f = false;
         foreach ($word as $eng => $rus) {
            if ($eng == $G) {
                $translation = $rus;
                $i_f = true;
                break;
            }
         }

         if (!$i_f) {
            foreach ($word as $eng => $rus) {
                if ($rus == $G) {
                    $translation = $eng;
                    $i_f = true;
                    break;
                }
            }
         }
         if ($i_f) {
            echo "$G - $translation <br>";
         }
         else {
            echo "нет такого слова <br>";
         }
    ?>
</body>
</html>