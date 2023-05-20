<?php error_reporting(-1);

/**
 * Первая задача
 */

function str_count($str, $substr) {
    return substr_count($str, $substr);
};

echo str_count("hello", "l");

/**
 * Вторая задача
 */

function no_space(string $str): string {
    $arr = explode(" ", $str);
    return implode($arr);
};

//function no_space(string $str): string
//{
//    return str_replace(' ', '', $str);
//}

echo no_space("Hello World! How are    you?!");

/**
 * Третья задача
 */

function max_number(int $num): int {
    $arr = str_split((string) $num);
    rsort($arr);
    return (int) implode($arr);
};

echo max_number(3912990);

//function max_number(int $num): int
//{
//    $digits = str_split($num);
//    rsort($digits);
//    return (int)implode('', $digits);
//}

//echo max_number(5159);
