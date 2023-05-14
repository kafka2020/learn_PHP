<?php error_reporting(-1);

//echo 'Test 1 ', 'Test 2 ', ' Test 3';
//print 'Test 4 ';
//
//var_dump(print 'test');
//var_dump(echo 'test');

$light = 'red';
//$light = 'green';
//
//if ($light == 'green') {
//    echo 'You can go now';
//} else {
//    echo 'Stop';
//}

if ($light == 'green') {
    echo 'You can go now';
} elseif ($light == 'yellow') {
    echo 'Get ready';
} elseif ($light == 'red') {
    echo 'Stop';
    if (2 > 3) {
        echo '2 > 3';
    } else {
        echo '2 < 3';
    }
} else {
    echo 'Something';
}

/*if ($light == 'yellow') {
    echo 'Get ready';
}

if ($light == 'red') {
    echo 'Stop';
}*/