<?php error_reporting(-1);

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//$db = mysqli_connect('localhost', 'root', '', 'world');
$db = mysqli_connect('localhost', 'root', '', 'world') or die('Error connection');
//var_dump($db);
//debug($db);
//$db = mysqli_connect('localhost', 'root', 'root2', 'world') or die('Error connection');
//$res = mysqli_query($db, "SELECT * FROM country");
$res = mysqli_query($db, "SELECT Code, Name FROM country LIMIT 10");
//var_dump($res);

//debug(mysqli_fetch_all($res));
//debug(mysqli_fetch_all($res, MYSQLI_ASSOC));
//debug(mysqli_fetch_all($res, MYSQLI_BOTH));

//debug(mysqli_fetch_assoc($res));

/*while ($row = mysqli_fetch_assoc($res)) {
    echo "Код страны: {$row['Code']} / Страна: {$row['Name']}<br>";
}*/

//var_dump(mysqli_query($db, "INSERT INTO `test` (name) VALUES ('Иванов')"));

//$name = "Петров";
$name = "d'Artanian";
$age = 25;
//$name = mysqli_real_escape_string($db, $name);
$name2 = "Кузнецов";
//var_dump(mysqli_query($db, "INSERT INTO test (name) VALUES ('$name')"));

/*$query = sprintf("INSERT INTO test (name, age) VALUES ('%s', %d)",
    mysqli_real_escape_string($db, $name),
    (int)$age);
var_dump(mysqli_query($db, $query));*/

/*$query = sprintf("UPDATE test SET name = '%s', age = %d WHERE id = 3",
    mysqli_real_escape_string($db, $name2),
    (int)$age);
var_dump(mysqli_query($db, $query));*/

//var_dump(mysqli_query($db, "DELETE FROM test WHERE id = 3"));
