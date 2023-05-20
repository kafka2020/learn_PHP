<?php error_reporting(-1);

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

/*
 * strlen — Возвращает длину строки
 * explode — Разбивает строку с помощью разделителя
 * implode — Объединяет элементы массива в строку
 * htmlspecialchars — Преобразует специальные символы в HTML-сущности
 * htmlentities — Преобразует все возможные символы в соответствующие HTML-сущности
 * ltrim — Удаляет пробелы (или другие символы) из начала строки
 * rtrim — Удаляет пробелы (или другие символы) из конца строки
 * trim — Удаляет пробелы (или другие символы) из начала и конца строки
 * nl2br — Вставляет HTML-код разрыва строки перед каждым переводом строки
 * str_split — Преобразует строку в массив
 * strpos — Возвращает позицию первого вхождения подстроки
 * stripos — Возвращает позицию первого вхождения подстроки без учёта регистра
 * strtolower — Преобразует строку в нижний регистр
 * strtoupper — Преобразует строку в верхний регистр
 * substr — Возвращает подстроку
 */

$str = ' Hello, world! ';
$str2 = 'Привет, мир!';
$str3 = "<script>alert('©Hello &gt;' + \" world\")</script>";
$str4 = "Привет!\nВо первых строках своего письма...";

//echo strlen($str);
//echo mb_strlen($str2, 'UTF-8');
//echo mb_strlen($str);

//$data = explode(',', $str2);
//debug($data);

//echo implode(',', $data);

//echo $str3;
//echo htmlspecialchars($str3, ENT_QUOTES, double_encode: false);
//echo htmlentities($str3);

//echo ltrim($str);
//echo rtrim($str);
//echo trim($str);
//echo trim($str, 'H ');

echo nl2br($str4);

//debug(str_split($str));

//var_dump(substr($str, -7, 5));
