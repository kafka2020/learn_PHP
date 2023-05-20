<?php
error_reporting(-1);

//print_r($_POST);

//isset()
//empty()

/*//$x = '';
$x = 1;
if (isset($x)) {
    var_dump($x);
}

if (empty($x)) {
    echo 'X is empty';
}*/

/*if (!empty($_POST['agree'])) {
    var_dump($_POST);
    foreach ($_POST['lang'] as $lang) {
        var_dump($lang);
    }
}*/

/*if (isset($_POST['send_form'])) {
    echo 'Была отправлена первая форма';
}

if (isset($_POST['search_form'])) {
    echo 'Была отправлена вторая форма';
}*/

//var_dump($_GET);

var_dump($_REQUEST);

?>
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

<form action="index.php" method="post">

    <p>Name: <input type="text" name="name"></p>
    <p>E-mail: <input type="email" name="email"></p>
    <p>Text: <textarea name="message"></textarea></p>
    <p>Agree? <input type="checkbox" name="agree"></p>
    <p>
        <select name="lang[]" multiple>
            <option value="ru">Russian</option>
            <option value="en">English</option>
            <option value="fr">France</option>
        </select>
    </p>
    <p><button type="submit" name="send_form">Send</button></p>

</form>

<hr>

<form action="index.php" method="get">

    <p>Search: <input type="text" name="s"></p>
    <p><button type="submit" name="search_form" value="search">Send</button></p>

</form>

<a href="?name=Andrey&age=30">Link</a>
<a href="?id=1">Product 1</a>
<a href="?id=5">Product 5</a>

</body>
</html>
