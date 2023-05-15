<?php error_reporting(-1);

/**
 *
 * $arr = [1,2,3,4,5,6,7,8,9,10];
 *
 */

$arr = [1,2,3,4,5,6,7,8,9,10];
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

function get_count(array $arr): int
{
    $count = 0;
    foreach ($arr as $item) {
        $count++;
    }
    return $count;
}

echo get_count($arr);
echo '<br>';
echo get_count($goods);

/**
 * Первый параметр - кол-во строк
 * Второй парметр - кол-во столбцов
 * get_table()
**/

function get_table(int $row, int $column)
{
    echo '<table border="1" width="100%">';
    $tr = 1;
    while ($tr <= $row) {
        echo "<tr>";
        $td = 1;
        while ($td <= $column) {
            echo "<td>{$td} * {$tr} = " . $td * $tr . "</td>";
            $td++;
        }
        echo "</tr>";
        $tr++;
    }
    echo '</table>';
}

get_table(11, 6);

//function get_table($tr_cnt, $td_cnt)
//{
//    $table = '<table border="1" width="100%">';
//    for ($tr = 1; $tr <= $tr_cnt; $tr++) {
//        $table .= "<tr>";
//        for ($td = 1; $td <= $td_cnt; $td++) {
//            $table .= "<td>$td * $tr = " . $td * $tr ."</td>";
//        }
//        $table .= "</tr>";
//    }
//    $table .= '</table>';
//    return $table;
//}
//
//echo get_table(5, 7);
//echo '<hr>';
//echo get_table(9, 9);
