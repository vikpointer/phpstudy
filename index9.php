<?php
    // lesson9_If-Else

   // echo system('notepad index1.php');   
    if (!isset($_GET['age'])) $age = 44;
    else $age = $_GET['age'];
    if (is_numeric($age)) {
        $gl = '';
        if ($age > 30) $gl = 'больше';
        elseif ($age < 30) $gl = 'меньше';
        echo "Вам $gl 30 лет";
    }
    else echo "Некорректный ввод";
    
    
    
    
?>
<!DOCTYPE html>
<head>
    <title>Lesson9 If-Else.</title>
    <style>
        p:nth-child(2) {font-size:<?=FONT_SIZE?>;}
    </style>
</head>
<body>
    <form action="" method="get" name="ageform">
        <label>Введите Ваш возраст: <input type="text" name="age" value="" placeholder="25"></label>
        <input type="submit" value="Ok">
    </form>
</body>
</html>


