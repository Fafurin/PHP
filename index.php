<?php
echo "<br>Задание 1<br>";
/* 
  1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. 
  Затем написать скрипт, который работает по следующему принципу:
  если $a и $b положительные, вывести их разность;
  если $а и $b отрицательные, вывести их произведение;
  если $а и $b разных знаков, вывести их сумму;
  Ноль можно считать положительным числом.
*/

$a = -12;
$b = 34;

if($a >= 0 && $b >= 0){
  echo ($a - $b);
}else if ($a < 0 && $b < 0){
  echo ($a * $b);
}else {
  echo ($a + $b); 
}
echo "<br><br>Задание 2<br>";
/*
  2. Присвоить переменной $а значение в промежутке [0..15]. 
  С помощью оператора switch организовать вывод чисел от $a до 15.
*/

$a = 12;

switch($a){
  case 0:
    echo 0 . "<br>";
  case 1:
    echo 1 . "<br>";
  case 2:
    echo 2 . "<br>";
  case 3:
    echo 3 . "<br>";
  case 4:
    echo 4 . "<br>";
  case 5:
    echo 5 . "<br>";
  case 6:
    echo 6 . "<br>";
  case 7:
    echo 7 . "<br>";
  case 8:
    echo 8 . "<br>";
  case 9:
    echo 9 . "<br>";
  case 10:
    echo 10 . "<br>";
  case 11:
    echo 11 . "<br>";
  case 12:
    echo 12 . "<br>";
  case 13:
    echo 13 . "<br>";
  case 14:
    echo 14 . "<br>";
  case 15:
    echo 15;
}

echo "<br><br>Задание 3<br>";
/*
  3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. 
  Обязательно использовать оператор return.
*/

function add($a, $b){
  return $a + $b;
}

echo ('3 + 5 = ' . add(3, 5) . ".<br>");

function sub($a, $b){
  return $a - $b;
}

echo ('3 - 5 = ' . sub(3, 5) . ".<br>");

function mult($a, $b){
  return $a * $b;
}

echo ('3 * 5 = ' . mult(3, 5) . ".<br>");

function div($a, $b){
  return $a / $b;
}

echo ('3 / 5 = ' . div(3, 5) . '.');

echo "<br><br>Задание 4<br>";
/*
  4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), 
  где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
  В зависимости от переданного значения операции выполнить одну из арифметических операций 
  (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
*/

function mathOperation($arg1, $arg2, $operation){
  switch($operation){
    case 'add':
      echo "$arg1 + $arg2 = " . add($arg1, $arg2) . ".<br>";
      break;
    case 'sub':
      echo "$arg1 - $arg2 = " . sub($arg1, $arg2) . ".<br>";
      break;
    case 'div':
      echo "$arg1 / $arg2 = " . div($arg1, $arg2) . ".<br>";
      break;
    case 'mult':
      echo "$arg1 * $arg2 = " . mult($arg1, $arg2) . '.';
      break;
  }
}

mathOperation(3, 5, 'add');
mathOperation(3, 5, 'sub');
mathOperation(3, 5, 'div');
mathOperation(3, 5, 'mult');

/*
  5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, 
  вывести текущий год в подвале при помощи встроенных функций PHP.
*/

//Сделал в прошлом дз.

echo "<br><br>Задание 6<br>";

/*
  6. С помощью рекурсии организовать функцию возведения числа в степень. 
  Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
*/

function power($val, $pow){
  if($pow == 0){
    return 1;
  }else {
    return $val * power($val, $pow-1);
  }
}

echo '2 в степени 3 = ' . (power(2,3));

echo "<br><br>Задание 7<br>";

/*
  7. Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
  22 часа 15 минут
  21 час 43 минуты
*/

function curr_time(){
  $curr_hours = getdate()[hours];
  $curr_minutes = getdate()[minutes];
  if(($curr_hours >= 5 && $curr_hours <= 20) || $curr_hours == 0){
    $hours = ' часов ';
  }else if ($curr_hours == 1 || $curr_hours == 21){
    $hours = ' час ';
  }else {
    $hours = ' часа ';
  }

  if($curr_minutes == 1 ||
     $curr_minutes == 21 || 
     $curr_minutes == 31 || 
     $curr_minutes == 41 || 
     $curr_minutes == 51 ){
    $minutes = ' минута ';
  } else if
    (($curr_minutes >= 2 && $curr_minutes <=4) || 
     ($curr_minutes >= 22 && $curr_minutes <= 24) || 
     ($curr_minutes >= 32 && $curr_minutes <= 34) ||
     ($curr_minutes >= 42 && $curr_minutes <= 44) || 
     ($curr_minutes >= 52 && $curr_minutes <= 54)) {
    $minutes = ' минуты ';
  } else $minutes = ' минут ';  

  echo('Сейчас ' . $curr_hours . $hours . $curr_minutes . $minutes);
}

curr_time();