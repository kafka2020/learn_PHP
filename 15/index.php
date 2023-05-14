<?php error_reporting(-1);

//$i = 1;
//while ($i <= 10) {
//    echo "{$i}<br>";
//    $i++;
//}

echo '<table border="1" width="100%">';

$tr = 1;
while ($tr <= 10) {
    echo "<tr>";
    $td = 1;
    while ($td <= 20) {
        echo "<td>" . $td * $tr ."</td>";
        $td++;
    }
    echo "</tr>";
    $tr++;
}

echo '</table>';

$i = 11;
while ($i <= 10) {
    echo "{$i}<br>";
    $i++;
}

$i = 1;
do {
    echo "{$i}<br>";
    $i++;
} while ($i <= 10);
