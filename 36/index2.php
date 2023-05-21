<?php

error_reporting(-1);
session_start();

//var_dump($_SESSION);
//echo $_SESSION['test'];

if (!empty($_SESSION['count'])) {
    echo "Вы посетили страницу index {$_SESSION['count']} раз(а)";
}

?>
<a href="index.php">Index</a>
