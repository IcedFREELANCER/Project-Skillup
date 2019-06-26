<?php
$value = $_COOKIE['name'];
setcookie('name', 'Vasya', time() + 20);

if ($value == '') {
    echo 'Privet';
} else {
    echo "Privet $value";
}





?>

