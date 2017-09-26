<?php
    // lesson14_Switch-Case
/*
1.Выведите форму, куда пользователь будет вводить число.
2.С помощью switch-case выведите строковое представление введённого числа. Например, если пользователь ввёл число 3, надо вывести «три», если 5, то надо вывести «пять».
3.Если пользователь делает ввод числа, представления для которого у Вас нет, надо вывести строку: «Нет представления этого числа в виде строки».
*/
   // echo system('notepad index1.php');   
    if (isset($_GET['num'])) {// при первом запуске, или пустом вводе не выводим ничего
        $num = $_GET['num'];
        $str = '';
        switch ($num) :
            case '0' : 
                $str = 'ноль'; 
                break;
            case '1' : 
                $str = 'один';
                break;
            case '2' : 
                $str = 'два';
                break;
            case '3' : 
                $str = 'три';
                break;
            case '4' : 
                $str = 'четыре';
                break;
            case '5' : 
                $str = 'пять';
                break;
            case '6' : 
                $str = 'шесть';
                break;
            case '7' : 
                $str = 'семь';
                break;
            case '8' : 
                $str = 'восемь';
                break;
            case '9' : 
                $str = 'девять';
                break;
            case '10' : 
                $str = 'десять';
                break;
        endswitch;
        if (strlen($str) == 0) echo "<br>Нет представления числа $num в виде строки.<br>";
        else echo "<br>$num - это $str <br>";
    }
    
    
    
?>
<!DOCTYPE html>
<head>
    <title>lesson12_Switch-Case</title>
    <style>
        
    </style>
</head>
<body>
    <form action="" method="get" name="numform">
        <label>Введите число: <input type="text" name="num" value="" placeholder="5"></label>
        <input type="submit" value="Перевести в строку">
    </form>
</body>
</html>


