<?php

error_reporting(-1);

$title = 'Урок 4!';
//$winnieThePooh = 'Hello I am Winnie';
//$winnie_the_pooh = "Hello I\'m Winnie. \"Строка в кавычках\"";

$fruit = 'orange';
$winnie_the_pooh = "Hello I am Winnie. I have 2 {$fruit}s";

$var = 'Test 1';
//$Var = 'Test 2';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
</head>
<body>

<?php $title = 'Урок 44444'; ?>
<h1><?php echo $title ?></h1>
<p><?= $winnie_the_pooh ?></p>
<p><?= $fruit ?></p>

<?php  ?>

<?php

var_dump($var, $Var);
//echo $Var;
//var_dump('€');
var_dump('Hello', 'Привет');

?>

</body>
</html>
