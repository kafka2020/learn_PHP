<?php

error_reporting(-1);

//setcookie('test', 'TEST1', path: '/');
//setcookie('test2', 'TEST2', ['path' => '/']);
//setcookie('test3', 'TEST3', ['path' => '/', 'expires' => time()+10]);
//setcookie('test4', 'TEST4', path: '/', expires_or_options: time()+3600);

//setcookie('test4', '', ['expires' => time()-3600, 'path' => '/']);

//var_dump($_COOKIE);

if (isset($_GET['do']) && $_GET['do'] == 'reset') {
    setcookie('count', '', time()-3600, '/');
    header("Location: index.php");
    die;
}

isset($_COOKIE['count']) ? setcookie('count', ++$_COOKIE['count'], time()+3600, '/') : setcookie('count', 1, time()+3600, '/');

echo "Вы посещали страницу: " . ($_COOKIE['count'] ?? 1);

echo '<p><a href="?do=reset">Reset</a></p>';
