<!doctype html>
<html lang="ru">
	<head>
 		<meta charset="UTF-8">
 		<meta name="viewport"
		 	content="width=device-width, user-scalable=no, initial-scale=1.0,
			maximum-scale=1.0, minimum-scale=1.0">
		 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>PHP</title>
	</head>
<body>
	<?php
		echo 'задание 1 <br>';
		echo '<b>Hello</b> World!';
	 	echo "<br>Hello";
	 	echo '\'';
	 	echo '<hr>';
	?>
	<?php
		echo 'задание 2 <br>';
 		define(MY_AGE, 24);
 		echo MY_AGE . '<br>';
		 $number = 5; // int
		 // $number = 45;
		 $num = -0.55; // float
		 $str = "Переменная"; // string
		 $bool = false; // boolean
		 $a = 0.5;
		 $b = "0.5";
		 echo $a + floatval($b).'<br>';
		 echo $str . ': ' . $number . '. Var 2: ' . $num;
		 echo '<hr>';
	?>
	<?php
		echo 'задание 3 <br>';
		$name = Павел;
		$surname = Иванов;
		$date = 1;
		$month = 11;
		$year = 1999;
		$age = 22;
		$happy = 0.76;
		echo "Имя: $name, фамилия: $surname" . '<br>';
		echo "Дата рождения: $date.$month.$year". '<br>';
		echo "Возраст: $age". '<br>';
		echo "Уровень счастья: $happy";
		echo '<hr>';
	?>
	<?php
		echo 'задание 4'.'<br>';
		$hasCar = false;
		$number = -0.78902;
		// Вывод в консоль
		echo "Есть машина? $hasCar". '<br>';
		echo "Число: $number";
		echo '<hr>';
	?>
	<?php
		echo 'задание 5'.'<br>';
		define("NUMBER_E", 2.71828);
		echo NUMBER_E;
		echo '<hr>';
	?>
	<?php
		echo 'задание 6'.'<br>';
		echo defined("NUMBER_E");
		echo '<hr>';
	?>
	<?php
		echo 'задание 7'.'<br>';
		$x = 10;
 		$y = 20;
 		echo $x + $y.'<br>';
		echo $x - $y.'<br>';
		echo $x * $y.'<br>';
		echo $x / $y.'<br>';
		echo $x % $y.'<br>';
		$x += 10; // $x = $x + 10;
		$y -= 10; // $y = $y - 10;
		echo $x.'<br>';
		echo $y.'<br>';
		$x++; // $x += 1;
		$x--; // $x -= 1;
		echo M_PI.'<br>';
		echo M_E.'<br>';
		echo abs(-22).'<br>';
		echo round(3.5556734, 2).'<br>';
		$rand = mt_rand(1, 20);
		$rand++;
		echo $rand.'<br>';
		echo max(2, 5, 6, 1, 8, 3, 6).'<br>';
		echo '<hr>';

	?>
	<?php
		echo 'задание 8'.'<br>';
		$first = 5.6;
		$second = 8.9;
		$summ = $first + $second;
		$diff = $first - $second;
		$mult = $first * $second;
		$divide = $first / $second;
		$ostatok = $first % $second;
		echo "Сумма: $summ".'<br>';
		echo "Разница: $diff".'<br>';
		echo "Умножение: $mult".'<br>';
		echo "Деление: $divide".'<br>';
		echo "Остаток: $ostatok".'<br>';
		echo '<hr>';
	?>
	<?php
		echo 'задание 9'.'<br>';
		$a = -2;
		$a *= 3;
		$a++;
		echo "Результат: $a";
		echo '<hr>';
	?>
	<?php
	 	echo 'задание 10'.'<br>';
	 	echo "Максимум : " . max(9, 23, 0, -24.5, 34, 11, 41, 3, -3.2, 3);
	 	echo '<hr>';
	?>
	<?php
	 	echo 'задание 11'.'<br>';
	 	echo floor(sqrt(2));
	 	echo '<hr>';
	?>
	<?php
	 	echo 'задание 12'.'<br>';
		$str = "Hello";
		echo "VAR: $str" . '!'.'<br>';
		echo "<input type=\"text\"><br>";

		$length = strlen($str);
		echo strtoupper(trim(" some ").'<br>');
		echo $length.'<br>';
		echo md5("qwerty");
		

		echo '<hr>';
	?>
	<?php
	 	echo 'задание 13'.'<br>';
	 	echo "\"".'<br>';
		echo " ' ".'<br>';
		echo "\\".'<br>'; 
		echo "\n".'<br>';
		echo "<div>Просто блок</div>".'<br>';
		echo "\"" . " ' " . "\\" . "\n" . "<div>Просто блок</div>";
	 	echo '<hr>';
	?>
	<?php
	 	echo 'задание 14'.'<br>';
	 	$string = "ASDПросто текстASD";
		// Первое задание
		$newStr = substr($string, 0, strlen($string) - 3).'<br>'; // Обрезаем все символы, кроме 3
		//последних
		echo "Обрезанная строка - $newStr".'<br>';
		// Второе задание
		$lowerCase = substr($newStr, 0, 3);
		// Обрезанную часть в нижний регистр + добавляем прежнюю строку, но без первых трех
		//элементов
		$result = strtolower($lowerCase);
		$result .= substr($newStr, 3, strlen($newStr));
		echo "Нижний регистр - $result".'<br>';
		// Третье задание
		echo "Первые три символа - " . substr($result, 0, 3).'<br>';
	 	echo '<hr>';
	?>
	<?php
	 	echo 'задание 15'.'<br>';
	 	$a = 2;
		$b = 10;
		if ($a == $b) { // Если $a будет равным $b, тогда будет выполнен код
			// Здесь код который будет выполнен
			// Если все одна строка кода, то фигурные скобки {}
			// можно не ставить
		echo "$a == $b";
		} else if ($a <= $b) { // Если $а будет меньшим или равным $b
		// Если предыдущее условие не будет выполнено,
		// а здесь условие окажется верным,
		// то будет выполнен этот код
		echo "$a <= $b";
		} else {
		// Этот код сработает, если другие условия не будут выполнены
		echo "$a > $b";
}
	 	echo '<hr>';
	?>
	<?php
	 	echo 'задание 16'.'<br>';
	 	$a = 5;
 		$str = "Hello";
		$isWeatherGood = false;
		if($str == "Hello" && !$isWeatherGood)
			echo 'First';
		else if($a == 5) {
			$res = "Second";
			echo $res;
		if($str == "Hello") {
			echo "<br>Yes";
			}
		}
		else if($a > 50)
			echo '$a > 50';
		else if($a <= 45)
			echo '$a <= 45';
		else
			echo 'Else';
	 	echo '<hr>';
	?>
	<?php
	 	echo 'задание 17'.'<br>';
	 	$a = 23;
		if ($a == 5)
			echo "10";
		else if ($a == 10)
			echo "15";
		else if ($a == 30)
			echo "20";
		else
			echo "Что-то не то!";
	 	echo '<hr>';
	?>
	<?php
	 	echo 'задание 18, решение на сайте мне показалось не правильным :( я его переделал p.s задание находится на 19 слайде'.'<br>';
	 	$x = 4.3;
		$y = 5.6;
		if ($x == 15)
			echo 'число $x равно 15';
		else
			echo 'число: $x не равно 15'.'<br>';
		if ($y >= 6)
			echo 'число: $y больше или равно 6';
		else
			echo 'число: $y не больше или не равно 6'.'<br>';
		if($x == $y)
			echo 'числа $x и $y равны';
		else
			echo 'числа $x и $y не равны';
	 	echo '<hr>';
	?>
	<?php
	 	echo 'задание 19, тут анологичная ситуцация :( решение мне кажется не правильным,либо я что-то не понимаю'.'<br>';
	 	$a = 34;
		if (($a < 50 && $a != 37 && $a >= 32) || ($a == 0 || $a == 15))
			echo 'число $a меньше 50, при этом не равно 37 и не меньше 32'.'<br>';
		else
			echo 'число $a либо больше 50, либо равно 37, либо меньше 32'.'<br>';
		if ($a == 0 || $a == 15)
			echo true;
	 	echo '<hr>';
	?>
	<?php
	 	echo 'задание 20 таже история :('.'<br>';
	 	$x = 7;
		$y = "7";
		if ($x == $y)
			echo 'значение равны'.'<br>';
		else
			echo 'значение не равны'.'<br>';
		if ($x === $y)
			echo 'типы данных равны'.'<br>';
		else
			echo 'типы данных не равны'.'<br>';
		echo '<hr>'

	?>
	<?php
	 	echo 'задание 21'.'<br>';
	 	$a = 2;
		$b = 5;
		if ($a % 2 == 0)
			echo $b.' - нечетное число';
		else
			echo $a.' - нечетное число';
	 	echo '<hr>';
	?>
	<?php
	 	echo 'задание 22'.'<br>';
	 	$a = 5;
		$b = -3;
		$res = $b != 0 ? ($a / $b) : 1;
		echo "Результат: $res";
	 	echo '<hr>';
	?>
</body>
</html>