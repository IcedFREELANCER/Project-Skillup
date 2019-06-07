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

?>

</body>
</html>