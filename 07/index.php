<?php error_reporting(-1);

$str = '<p>Hello 1</p>';
$str2 = "<p>Hello 2</p>";

echo "<p>Hello 1</p>\n";
echo "<p>Hello \\2</p>";
echo PHP_EOL;
echo "<p>Hello 3</p>\n";
echo '<p>Hello \2</p>\n';

$str3 = "Lorem ipsum dolor sit \"amet\", consectetur 'adipisicing' elit. Architecto at delectus eaque est explicabo odio quo saepe vel? Assumenda doloremque doloribus eos eum excepturi explicabo laborum maiores reprehenderit saepe suscipit?";

$name = 'John';
$str4 = <<<"HEREDOC"
<div>
Hello $name <br>
Lorem ipsum dolor sit "amet", consectetur 'adipisicing' elit. Architecto at delectus eaque est explicabo odio quo saepe vel? Assumenda doloremque doloribus eos eum excepturi explicabo laborum maiores reprehenderit saepe suscipit?
Пример использования слеша \\ и \n
</div>
HEREDOC;

echo $str4;

$str5 = <<<'NOWDOC'
<div>
Hello $name <br>
Lorem ipsum dolor sit "amet", consectetur 'adipisicing' elit. Architecto at delectus eaque est explicabo odio quo saepe vel? Assumenda doloremque doloribus eos eum excepturi explicabo laborum maiores reprehenderit saepe suscipit?
Пример использования слеша \\ и \n
</div>
NOWDOC;

echo $str5;

var_dump((string)false);
