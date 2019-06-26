<?php
$value = $_COOKIE['name'];
if ($value == '') {
    echo 'Privet vsem';
} else {
    echo "Privet $value";
}


setcookie('name', 'Vasya, time() + 20);



?>

