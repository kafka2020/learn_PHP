<?php error_reporting(-1);

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

/**
 * Первая задача
 * Дан массив:
 * $nums = [1, 2, 3, 1, 4, 5, ];
 *
 */

$nums = [1, 2, 3, 1, 4, 5, 3, 2, 6, 7, 7, 8, 8, 9, 2, 5, ];

function user_count($data)
{
    $cnt = 0;
    foreach ($data as $item) {
        $cnt++;
    }
    return $cnt;
}

echo user_count($nums). PHP_EOL;
echo count($nums) . PHP_EOL;

/**
 * Вторая задача
 */

echo array_sum($nums) . PHP_EOL;

function user_sum($data)
{
    $sum = 0;
    foreach ($data as $item) {
        $sum += $item;
    }
    return $sum;
}

echo  user_sum($nums) . PHP_EOL;

/**
 * Третья задача
 */

//$arr = [];
//foreach (range(0, 100) as $number) {
//    $arr[$number] = $number;
//}
//debug($arr);

//$arr = range(1, 100);
//debug(range(1, 100));

//$arr2 = [];
//$n = 1;
//for ($i = 0; $i < 100; $i++) {
//    $arr2[$i] = $n++;
//}
//debug($arr2);

$arr = [];
for ($i = 1; $i <= 100; $i++) {
    $arr[] = $i;
//    array_push($arr, $i);
}

debug($arr);
