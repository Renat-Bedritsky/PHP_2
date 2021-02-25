<!DOCTYPE html>
<html lang="ru">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>

</head>
<body>

<?php

// Задание 1

echo 'Задание 1. $a == пустота - Верно. Иначе - Неверно <br><br>';

$a = [1, 3, -3, 0, null, true, "", '0'];
foreach ($a as $value) {
    if (!$value) {
        echo '$a == ' . $value . ' - Верно<br>';
    }
    else {
        echo '$a == ' . $value . ' - Неверно<br>';
    }
}

// Задание 2

echo '<hr> Задание 2. В трёхзначном числе вторую цифру сменить на 0 <br><br>';

$a = 123;
$a = (string)$a;
$a[1] = 0;

echo $a;

// Задание 3

echo '<hr> Задание 3. if ($a <= 1 && $b >= 3) echo $a + $b else echo $a - $b <br><br>';

$a = [1, 0, 3];
$b = [3, 6, 5];

for ($i = 0; $i < 3; $i++) {
    if ($a[$i] <= 1 && $b[$i] >= 3) echo "{$a[$i]} + {$b[$i]} = " . ($a[$i] + $b[$i]) . '<br>';
    else echo "{$a[$i]} - {$b[$i]} = " . ($a[$i] - $b[$i]) . '<br>';
}

// Задание 4

echo '<hr> Задание 4. Если строка начинается на "а" - вывести Да, иначе - Нет <br><br>';

$str = 'abcde';
if ($str[0] == 'a') echo 'Результат: Да';
else echo 'Результат: Нет';

// Задание 5

echo '<hr> Задание 5. Если в строке из 6 цифр первые три == вторым трём - вывести Да. Иначе - нет <br><br>';

$str = '759274';
echo 'Строка = ' . $str . '<br>';
$str_1 = ($str[0] + $str[1] + $str[2]);
$str_2 = ($str[3] + $str[4] + $str[5]);
if ($str_1 == $str_2) echo '== ? Да';
else echo '== ? Нет';

// Задание 6

echo '<hr> Задание 6. Циферблат <br><br>';

$numberOn = $_GET['numberOn'];

if ($numberOn >= 0 && $numberOn <= 360) {
    $resultOff = ceil($numberOn / 30) . ' часов';
}
else $resultOff = 'Неверно!';

/*  P.S. Второй вариант
$h = 0;
if ($numberOn >= 0 && $numberOn <= 360) {
    for ($i = 0; $i <= $numberOn; $i += 30) {
            $h++;
            $resultOff = "{$h} часов";
    }
}
else $resultOff = 'Неверно!';
*/

?>

<form action="/PHP_2/index.php" method="GET">
    <p>Введите число от 0 до 360</p>
    <input type="number" name="numberOn" value="">
    <button>Результат</button>
    <input type="text" name="result" value="<?=$resultOff?>" disabled>
</form>

<?php

// Задание 7

echo '<hr> Задание 7. Сложить числа от 20 до 45, кратные 5 <br><br>';

$j = 0;

for ($i = 20; $i <= 45; $i++) {
    if ($i % 5 == 0) $j += $i;
}

echo $j;

// Задание 8

echo '<hr> Задание 8. В чесле 12345 чётные цифры заменить на 0 <br><br>';

$a = '12345';
for ($i = 0; $i < 5; $i++) {
    if ($a[$i] % 2 == 0) {
        $a[$i] = 0;
    }
}
echo $a;

// Задание 9

echo '<hr> Задание 9. Делить 1000 на 2 пока число не станет меньше 50 <br><br>';

$num = 1000;
$p = 0;

echo  'Цикл while: <br>';

while ($num > 50) {
    $num /= 2;
    $p++;
}

echo 'Итоговое число ' . $num . '<br>';
echo 'Количество итераций ' . $p . '<br><br>';

$p = 0;

echo 'Цикл for: <br>';

for($num = 1000; $num > 50; $num /= 2) {
    $p++;
}

echo 'Итоговое число ' . $num . '<br>';
echo 'Количество итераций ' . $p;

// Задание 10

echo '<hr> Задание 10. Квадрат <br><br>';

$height = 5;
$width = 8;

for ($q = 0; $q < $height; $q++) {
    for($w = 0; $w < $width; $w++) {
        echo '*';
    }
    echo '<br>';
}

?>

</body>
</html>