<?php error_reporting(-1);

// https://psalm.dev/


//function sum(...$nums)
//{
//    var_dump($nums);
//}
//
//sum(1,2, 3, 4, 5);
//function sum($a, $b, ...$nums)
//{
//    $res = $a * $b;
//    foreach ($nums as $num) {
//        $res += $num;
//    }
//    echo $res;
//}
//
//sum(1,2, 3, 4, 5);

//function test()
//{
////    $a = 0;
//    static $a = 0;
//    echo $a;
//    $a++;
//}
//
//test();
//test();
//test();

//function sum(int $a, int $b, int $c)
//{
//    return $a + $b + $c;
////    echo 'Test';  // Невыполняемый код
//}
//
//echo $res = sum(1, 2.7, 3);
//var_dump($res);

//function test()
//{
//
//}
//
//var_dump(test());
//
//function sum($a, $b, $c): float
//{
//    return $a + $b + $c;
//}
//
//var_dump(sum(1, 2, 3));
//var_dump(sum(1, 2.7, 3));

//function test(): void
//{
//
//}

//function test_1(string $a): ?string      // Обнуляемый тип
//{
//    if ($a) {
//        return 'Test';
//    }
//    return null;
//}

function sum($term1, $term2 = 1, $factor = 2)
{
    return ($term1 + $term2) * $factor;
}

echo sum(1, factor: 3);   // Именованный аргумент
echo sum(factor: 3, term1: 1, term2: 2);
