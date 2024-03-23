<!DOCTYPE html>
<html lang="en">
<head>
    <title>Word and Character Сounter</title>
</head>
<body>
    <form method="post">
        <label>
            <textarea name="text" rows="3" cols="50"></textarea><br>
        </label>
        <input type="submit" name="submit" value="Посчитать">
    </form>


<?php
if(isset($_POST['submit']) and (!empty($_POST['text'])))
    {
    $text = $_POST['text'];
    $word_count = str_word_count($text);
    $char_count = strlen($text);
    echo "<br> Количесвто слов в введенном тексте: $word_count </br>";
    echo "Количесвтво букв в введенном тексте: $char_count";
    }
else
    {
        echo "Сперва напишите что-нибудь, затем нажмите 'Посчитать'";
    }
?>

</body>
</html>
