<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

echo "Задание 1. Создайте переменные a=10 и b=2. Выведите на экран их сумму, разность, произведение и частное (результат деления).<br /> <br />";

$a = 10;
$b = 2;
$summ = $a + $b;

echo 'Сумма = ' . ($a + $b) . '<br/>';
echo 'Разность = ' . ($a - $b) . '<br />';
echo 'Произведение = ' . ($a * $b) . '<br />';
echo 'Частное = ' . ($a / $b) . '<br />';

echo '<hr /> <br />';


echo "Задание 2. Даны три числа x = 2,y = 6 и z = 9. Найдите (x+1)4−2(z−2x^2+y^2). <br /> <br />";

$x = 2;
$y = 6;
$z = 9;

echo ($x + 1) / 4 - 2 * ($z - 2 * $x ** 2 + $y ** 2);

echo '<hr /> <br />';


echo "Задание 3. Создайте переменные a=17 и b=10. Отнимите от a переменную b и результат присвойте переменной c. Затем создайте переменную d, присвойте ей значение 7. Сложите переменные c и d, а результат запишите в переменную result. Выведите на экран значение переменной result.<br /> <br />";

$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;

echo $result;

echo '<hr /> <br />';


echo "Задание 4. Создайте переменные text1='Привет, ' и text2='Мир!'. С помощью этих переменных и операции сложения строк выведите на экран фразу 'Привет, Мир!'.<br /><br />";

$text1 = 'Привет, ';
$text2 = 'Мир!';

echo  "$text1  $text2";

echo '<hr /> <br />';


echo "Задание 5. Создайте переменную name и присвойте ей ваше имя. Выведите на экран фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя.<br /><br />";

$name = 'Женя';

echo "Привет, $name!";

echo '<hr /> <br />';


echo "Задание 6. Создайте переменную num и присвойте ей значение '12345'. Найдите сумму цифр этого числа.<br /><br />";

$num = "12345";

echo $num[0] + $num[1] + $num[2] + $num[3] + $num[4];

echo '<hr /> <br />';


echo "Задание 7. Напишите скрипт, который считает количество секунд в часе, в сутках, в месяце, в году и сколько прошло секунд с начала 2000 года.<br /><br />";

$secHour = 60 * 60;
$secDays = $secHour * 24;
$secMonth = $secDays * 30;
$secYear = $secMonth * 12;

$hour = 23;
$days = 19;
$month = 11;
$year = 21;

echo 'Количество секунд в часе = ' . $secHour . '<br />';
echo 'Количество секунд в сутках = ' . $secDays . '<br />';
echo 'Количество секунд в месяце = ' . $secMonth . '<br />';
echo 'Количество секунд в году = ' . $secYear . '<br />';

echo 'Количество секунд с 2000г. = ' . (date("Y") - 2000) * $secYear;

echo '<hr /> <br />';


echo "Задание 8. Создайте три переменные - час, минута, секунда. С их помощью выведите текущее время в формате 'час:минута:секунда'<br /><br />";

$hour = date("H");
$min = date("i");
$sec = date("s");

echo "$hour:$min:$sec";

echo '<hr /> <br />';


echo 'Задание 9. Переделайте приведенный код так, чтобы в нем использовались операции +=, -=, *=, /=, ++, --. Количество строк кода при этом не должно измениться. Код для переделки:
$var = 1; <br />
$var = $var + 12; <br />
$var = $var - 14; <br />
$var = $var * 5; <br />
$var = $var / 7; <br />
$var = $var + 1; <br />
$var = $var - 1; <br />
echo $var
<br /> <br />';

$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var /= 7;
$var += 1;
$var -= 1;
echo $var;

echo '<hr /> <br />';


echo "Задание 10. Создайте константу и присвойте ей значение - ваша фамилия, создайте соответствующие переменные со сл. значениями: ваше имя, ваше отчество, ваш возраст. Проверьте существует ли созданная константа, если да, то выведите фразу 'Меня зовут <ваша фамилия> (сокр. <ваше имя> и сокр.   ваше отчество). Мне <ваш возраст> лет'. Каждая фраза должна начинаться с новой строки. Например: 'Меня зовут Иванов (И. И.). Мне 5 лет.'<br /><br />";

define('SURNAME', 'Цыбин');
$surname = SURNAME;
$name = 'Евгений';
$middle_name = 'Иосифович';
$age = 32;

if (defined('SURNAME')) {
    echo("Меня зовут $surname " . mb_substr($name, 0, 1) . '. ' . mb_substr($middle_name, 0, 1) . '.' . "<br/> Мне $age года.");
}

?>

</body>
</html>