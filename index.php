<!DOCTYPE html>
<html>
<head>
    <title>Hello world</title>

</head>
<body>

<?php

$a = $b = $c = $d = 2;
echo $a++, "<br>";
echo ++$b, "<br>";
echo $c--, "<br>";
echo --$d, "<br>";


$d = "Hello";
$d = $d . "world";
echo $d;
echo "<br>";
$d .= "! ! !";
echo $d;


$value = 10;
$value = $value + 5;
$value += 5;
echo $value, "<br>";
$value -= 5;
echo $value, "<br>";
$value *= 5;
echo $value, "<br>";
$value /= 5;
echo $value, "<br>";

$a = 45;
switch ($a) {
    case $a <= 50:
        echo "норма";
        break;
    case $a >= 50:
        echo "много";
        break;
    case $a >= 90:
        echo "очень много";
        break;
    default :
        echo "не найдено";
        break;
}


$a = 40;
$b = 50;
$r = $a = 40 ? "+" : "-";
echo $r;
$r = $b = 60 ? "+" : "-";
echo $r;

#циклы
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$max = count($arr);
foreach ($arr as $key => $value) {
    echo $value . "<br>";

}

#примеры ф-ций
substr("hello world", 6, 5);

mb_strpos("hello world", "world");

trim(" 123456   ");

trim(" ", ",");


#массивы
$a = []; #обнуление предидущей переменной
$a[1] = "PHP";
$a[2] = "HTML";
$a[3] = "CSS";
sort($a);
print_r($a);

#еще сортировка
rsort($a);
ksort($a);
krsort($a);





?>

</body>
</html>