<?php error_reporting(-1);

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

/*
 * count - Подсчитывает количество элементов массива или чего-либо в объекте
 * array_count_values — Подсчитывает количество всех значений массива
 * array_key_exists — Проверяет, присутствует ли в массиве указанный ключ или индекс
 * in_array — Проверяет, присутствует ли в массиве значение
 * array_search — Осуществляет поиск данного значения в массиве и возвращает ключ первого найденного элемента в случае удачи
 * array_keys — Возвращает все или некоторое подмножество ключей массива
 * array_values — Выбирает все значения массива
 * array_unique — Убирает повторяющиеся значения из массива
 */

$goods = [
    [
        'title' => 'Nokia',
        'price' => '100',
        'qty' => '10',
    ],
    [
        'title' => 'Sony',
        'price' => '120',
        'qty' => '7',
    ],
    [
        'title' => 'LG',
        'price' => '105',
        'qty' => '15',
    ],
];

$car = [
    'brand' => 'Toyota',
    'model' => 'Camry',
    'year' => 2021,
    'speed' => 220,
    'wheels' => 4,
];

$nums = [1, 2, 0, 3, 1, 4, 5, 3, 2, 6, 7, 7, 8, 0, 8, 9, 2, 5,];

//echo count($goods) . PHP_EOL;
//echo count($goods, 1) . PHP_EOL;
//echo count($goods,  COUNT_RECURSIVE) . PHP_EOL;
//echo count($car) . PHP_EOL;
//echo count($nums) . PHP_EOL;

//debug(array_count_values($nums));

//var_dump(array_key_exists('year', $car));

//var_dump(in_array(2021, $car));

//var_dump(array_search(3, $nums));

//debug(array_keys($car));
//
//debug(array_values($car));
//
//debug(array_unique($nums));

function odd($var)
{
    return $var % 2;
}

function even($var)
{
    return !($var % 2);
}

debug(array_filter($nums, "even"));
debug(array_filter($nums, "odd"));

debug(array_filter($nums, function ($var) {
    return !($var % 2);
}));
