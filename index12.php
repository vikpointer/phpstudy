<?php
    // lesson12_Switch-Case
/*
1.Выведите форму, куда пользователь будет вводить число.
2.С помощью switch-case выведите строковое представление введённого числа. Например, если пользователь ввёл число 3, надо вывести «три», если 5, то надо вывести «пять».
3.Если пользователь делает ввод числа, представления для которого у Вас нет, надо вывести строку: «Нет представления этого числа в виде строки».
*/
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
    <title>lesson12_Switch-Case</title>
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


