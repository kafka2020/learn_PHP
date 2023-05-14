<?php error_reporting(-1);

$arr1 = array();
//$arr2 = [];
//
//var_dump($arr1, $arr2);

//$arr1 = ['Ivanov', 'Petrov', 'Sidorov'];
//var_dump($arr1);
//echo '<pre>' . print_r($arr1, 1) . '</pre>';

//$arr1[] = 'Lomov';
//echo '<pre>' . print_r($arr1, 1) . '</pre>';

//$arr1 = [
//    1 => 'Ivanov',
//    3 => 'Petrov',
//];
//var_dump($arr1);

//$arr1[5] = 'Sidorov';
//$arr1[] = 'Doe';
//$arr1[] = 10;
//$arr1['-8'] = 11;
//$arr1[] = 1.6;
//$arr1[] = true;
//$arr1[] = false;
//$arr1[] = null;
//$arr1[null] = 100;
//$arr1[null] = 10;
//$arr1[28.7] = 7.8;
//
//echo '<pre>' . print_r($arr1, 1) . '</pre>';
//
//echo $arr1[3];
//echo $arr1[2];

//echo $arr1{3};
//
//$array = array(
//    "1"  => "b",
//    1.5  => "c",
//    1    => "a",
//    true => "d",
//);
//var_dump($array);

//$goods = [
//    'title' => 'Nokia',
//    'price' => 100,
//    'qty' => 10,
//];
//
//echo '<pre>' . print_r($goods, 1) . '</pre>';
//echo $goods['title'];

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
];

for ($i = 0; $i < 2; $i++) {
    echo "Наименование: {$goods[$i]['title']}<br>";
    echo "Цена: {$goods[$i]['price']}<br>";
    echo "Количество: {$goods[$i]['qty']}<br><hr>";
}

//echo '<pre>' . print_r($goods, 1) . '</pre>';
//echo $goods['title'];
//echo $goods[0]['title'];
//echo $goods[1]['title'];

//$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, ];
//echo '<pre>' . print_r($nums, 1) . '</pre>';


for ($i = 1; $i < 11; $i++) {
    $nums[] = $i;
}

echo '<pre>' . print_r($nums, 1) . '</pre>';
