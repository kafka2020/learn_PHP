<?php error_reporting(-1);

//test();
//
//function test()
//{
//    echo '<p>Hello, world!</p>';
//}
//
//test();
//test();

//function hello($name = 'Guest')
//{
//    echo "<p>Hello, {$name}</p>";
//}
//
//$my_name = 'John';
//hello($my_name);
//hello('John');
//hello('Jack');
//hello();

//function sum($b, $a = 1, $c = 3,)
//{
//    echo ($a + $b) * $c;
//}
//
//sum(1, 2);

$a = 5;

//function test($a)
//{
////    global $a;
//    $a += 10;
//    var_dump($a);
//}
//
//var_dump($a);
//test($a);
//var_dump($a);

function test(&$n)  // Передача по ссылке
{
    $n += 10;
}

$num = 20;
test($num);
var_dump($num);
