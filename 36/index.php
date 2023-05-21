<?php
error_reporting(-1);
session_start();

//$_SESSION['test'] = 'TEST';
//$_SESSION['test2'] = 'TEST 2';

var_dump($_SESSION);
//echo $_SESSION['test'];

$_SESSION['count'] = isset($_SESSION['count']) ? ++$_SESSION['count'] : 1;
//unset($_SESSION['test'], $_SESSION['test2']);
?>

<a href="index2.php">Index 2</a>
