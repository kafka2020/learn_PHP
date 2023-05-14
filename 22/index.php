<?php error_reporting(-1);

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10,];

//$i = 0;
//while ($i < 10) {
//    echo $nums[$i] . '<br>';
//    $i++;
//}
//
//for ($i = 0; $i < 10; $i++) {
//    echo $nums[$i] . '<br>';
//}

//foreach ($nums as $num) {
//    echo $num . '<br>';
//}

//foreach ($nums as $k => $v) {
//    echo "Key: $k, Value: $v <br>";
//}

$goods = [
    [
        'title' => 'Nokia',
        'price' => 100,
        'qty' => 10,
    ],
    [
        'title' => 'Sony',
        'price' => 130,
        'qty' => 8,
    ],
    [
        'title' => 'LG',
        'price' => 105,
        'qty' => 15,
    ],
];

//echo '<pre>' . print_r($goods, 1) . '</pre>';

//for ($i = 0; $i < 3; $i++) {
//    echo "Наименование: {$goods[$i]['title']} <br>";
//    echo "Цена: {$goods[$i]['price']} <br>";
//    echo "Кол-во: {$goods[$i]['qty']} <br>";
//    echo '<hr>';
//}

//foreach ($goods as $good) {
//    echo "Наименование: {$good['title']} <br>";
//    echo "Цена: {$good['price']} <br>";
//    echo "Кол-во: {$good['qty']} <br>";
//    echo '<hr>';
//}

//for ($i = 0; $i < 3; $i++) {
//    $goods[$i]['price'] *= 2;
//    $goods[$i]['total'] = $goods[$i]['price'] * $goods[$i]['qty'];
//}

foreach ($goods as &$good) {
    $good['price'] *= 2;
}

echo '<pre>' . print_r($goods, 1) . '</pre>';
