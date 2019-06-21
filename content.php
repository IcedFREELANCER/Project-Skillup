<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>Hello world</h1>

<?php
$a = file_get_contents ("http://google.com");
$b = file_get_contents ("1.txt.txt");
file_put_contents("1.txt.txt", "233");


?>

</body>
</html>