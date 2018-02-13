<?php
/* 1-4 */
    $name = "Ярослав";
    $age = "23";
    echo "Меня зовут: {$name}";
    echo "Мне {$age} лет";
/* 5-8 */
<?php
$age = "s";
if ($age < 0 || !is_numeric($age)  ) {
    echo "Неизвестный возраст";
} elseif ($age < 18) {
    echo "Вам еще рано работать";
} elseif ($age > 59) {
    echo "Вам пора на пенсию";
}else {
    echo "Вам еще работать и работать";
}  
/* 9-12 */
<?php 
$day = rand(0,10);
switch ($day) {
	case '1';
	case '2';
	case '3';
	case '4';
	case '5';
		echo 'Рабочий день';
		break;
	case '6';
	case '7';
	     echo 'Это выходной';
	     break;
	default:
		echo 'Неизвестный день';
		break;
}
/* 13 */
<?php 
$s = ''; //км
$t = ''; //ч
$v1 = $s/$t; // км/ч
$v2 = ($s * 1000)/($t * 3600); // м/с
echo "Cкорость автомобиля на данном участке дороги {$v1} км/ч или {$v2} м/с";
/* 14 */
<?php
$foo = 'bar';
$bar = 10;
echo $$foo;
/* 15 - сюда я внёс для удобства, делалось это в отдельном файле, не увере что это было сделано правильно*/
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор на PHP</title>
</head>
<body>
    <!-- Не знал как сделать форму ввода, решил что через HTML форму, пожалуйста дайте фидбек как можно было сделать оптимальнее -->
<form method="get" action="calculator.php">

<label for="numeric1">Число №1<br></label><input type="text" name="count1"><br>
<label for="numeric2">Число №2<br></label><input type="text" name="count2"><br>
<select name="count3">
  <option>+</option>
  <option>-</option>
  <option>*</option>
  <option>/</option>
</select><br><br>
<input type="submit" value="посчитать">
</form>

<?php
$count1 = $_GET['count1'];
$count2 = $_GET['count2'];
$count3 = $_GET['count3'];

echo $count1 . $count3 . $count2 . '=';

switch ($count3) {
    case '+':
        echo $count1 + $count2;
        break;
  case '-':
        echo $count1 - $count2;
        break;
    case '*':
        echo $count1 * $count2;
        break;
   case '/':
       if (!$count2) {
                    $result = 'ЗАЧЕМ ТЫ ПОДЕЛИЛ НА НОЛЬ';
                } else {
                    $result = $count1 / $count2;;
                }
                break;
}
?>
    
</body>
</html>
?>

------------

/* 16 */
<?php

$a = rand();
$b = rand();
echo $a > $b ? $a : $b;

/* 17 */
<?php
$a = '78';
$b = 78;
if ($a == $b) {
    echo 'равны';
} else {
    echo 'не равны';
}

/* 18 */
$a = '78';
$b = 78;
if ($a === $b) {
    echo 'эквивалентны';
} else {
    echo 'не эквивалентны';
}
/* 19 */
<?php
$a = '78';
$b = 78;
var_dump($a == $b);
/* 20 */
var_dump((bool) 20); // Любое ненулевое число рассматриваем как ТруЪ
/* 21 */
var_dump((bool)0); // 0 рассматривается как FALSE в boolean

/* 22 */
var_dump((bool)-20); //Любое ненулевое число рассматривается как TRUE
/* 23 */

echo 'Вывод строки с использованием <code>echo</code><br>'; // выводит 1 или более строк
print 'Вывод строки с использованием <code>print</code><br>'; // выводит одну строку
printf('Вывод строки с использованием <code>%s</code><br>', 'printf'); // выдает отформатированый текст
/* 24 */

// Comment 1. - однострочный

/*
 * Comment 2. - многострочный
 */

# Comment 3. - Юникс-лайк коммент

/* 26 */
<?php

define('DAYS_COUNT', 7); //Определяет именованную константу
const MONTH_COUNT = 12; //Задает константу?
