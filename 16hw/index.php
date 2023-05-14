<?php error_reporting(-1);

//Первая задача

echo '<select name="year" id="year-select">';

$year = 1900;
while ($year <= 2021) {
    echo "<option value=\"{$year}\">{$year}</option>";
    $year++;
}

echo '</select>';
echo '<hr>';
//Вторая задача

echo '<table border="1" width="100%">';

$tr = 1;
while ($tr < 10) {
    echo "<tr>";
    $td = 2;
    while ($td < 10) {
        echo "<td>{$td} * {$tr} = " . $td * $tr . "</td>";
        $td++;
    }
    echo "</tr>";
    $tr++;
}

echo '</table>';