<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

function f1($value)
{
    if ($value == 1) {
        return "1";
    }

    return f1($value - 1) . $value;
}

echo f1(55);


echo f2(123);

function f2($value)
{
    if ($value < 10) {
        return $value;
    }
    return $value % 10 + f2((int)($value / 10));
}

?>


<?php




?>

</body>
</html>