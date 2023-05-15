<?php error_reporting(-1);

//include 'funcs.php';
//include __DIR__ . '/funcs.php';
//var_dump(__DIR__);
//include 'funcs2.php';
//@include 'funcs2.php';
//require 'funcs.php';
//require 'funcs.php';
//require 'funcs2.php';

//echo get_table(5, 7);

//require_once 'src/conf.php';

$data = require_once 'src/conf.php';
//$data = require_once '../src/conf.php';  // Выход из папки на уровень выше

/** @var array $data */
print_r($data);


//require_once 'funcs.php';
//require_once 'funcs.php';


/*require 'test.php';
require 'test.php';
require 'test.php';*/

//echo 'Hello!';
//echo get_table(5, 7);
