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


#переходы по массиву
$a = [];
$a[1] = "PHP";
$a[2] = "HTML";
$a[3] = "CSS";
echo current($a) . "<br>";
echo next($a) . "<br>";
echo next($a) . "<br>";
echo prev($a) . "<br>";
echo end($a) . "<br>";
echo reset($a) . "<br>";
echo in_array("PHP", $a);



#функция implode + explode ^^^
$str = implode (",",$a);

$a = explode (",",$str);



#делает из ключей переменные __
$a ['one'] = "PHP";
$a ['two'] = "HTML";
$a ['three'] = "CSS";
extract ($a);

#обратная функция... ^^
$one = "PHP";
$two = "HTML";
$three = "CSS";
compact ("one" , "two" , "three");


#объединение массивов
$a1[] = 1;
$a1[] = 2;
$a2[] = 3;
$a2[] = 4;
array_merge ($a1,$a2);

#----
$a1[] = 'PHP';
$a1[] = 'HTML';
$a1[] = 'CSS';
$a2[] = 'PHP';
$a2[] = 'PHPr,2';
$r = array_diff ($a1,$a2);
$r2 = array_intersect($a1,$a2);
array_sum ($arr);
array_unique($arr);



?>

</body>
</html>