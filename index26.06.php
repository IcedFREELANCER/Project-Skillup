<?php
$value = $_COOKIE['name'];
setcookie('name', 'Vasya', time() + 20);

if ($value == '') {
    echo 'Privet';
} else {
    echo "Privet $value";
}





?>


<br>

<?php
function rnd_replace($matches)
{
    if ($matches[1] > 'c')
        return '('.$matches[1].'->'.rand(0, 9).')';
    else
        return $matches[1];
}
$src = 'sd4vaf345g534fgh43kj3';
$res = preg_replace_callback('/(\D)/', 'rnd_replace', $src);
echo $res


?>





<br>

<?php

$regexp = "/к[а-яё]т/ui";

// строки, к которым мы будем по очереди применять регулярку
$lines = [
    'рыжий кот',
    'рыжий крот',
    'кит и кот'
];

foreach ($lines as $line) {
    echo "Строка: $line\n";

    // сюда будет помещено первое
    // совпадение с шаблоном
    $match = [];
    if (preg_match($regexp, $line, $match)) {
        echo "+ Найдено слово '{$match[0]}'\n";
    } else {
        echo "- Ничего не найдено\n";
    }
}

die();


?>

<br>

<?php
$regexp = "/к[а-яё]т/ui";

// строки, к которым мы будем по очереди применять регулярку
$lines = [
    'рыжий кот',
    'рыжий крот',
    'кит и кот'
];

foreach ($lines as $line) {
    echo "Строка: $line\n";

    // сюда будет помещено первое
    // совпадение с шаблоном
    $match = [];
    if (preg_match_all($regexp, $line, $match)) {
        echo "+ Найдено слово '{$match[0]}'\n";
    } else {
        echo "- Ничего не найдено\n";
    }

    var_dump($match);
    echo "<hr>";
}

?>

<br>

<?php

$regexp = "/к[а-яё]т/ui";

// строки, к которым мы будем по очереди применять регулярку
$lines = [
    'рыжий кот',
    'рыжий крот',
    'кит и кот'
];

foreach ($lines as $line) {
    echo "Строка: $line\n";

    // сюда будет помещено первое
    // совпадение с шаблоном
    $match = [];
    if (preg_match_all($regexp, $line, $match)) {
        echo "+ Найдено слово '{$match[0]}'\n";
    } else {
        echo "- Ничего не найдено\n";
    }

    var_dump($match);
    echo "<hr>";
}

?>
