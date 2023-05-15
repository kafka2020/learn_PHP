<?php error_reporting(-1); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, error, ut! A accusantium alias architecto
    dolorem impedit itaque, iusto laudantium, libero maxime obcaecati possimus praesentium quae quidem ratione
    reprehenderit velit!</p>

<?php

$nums = [1,2,3,4,5,];

foreach ($nums as $num):
    echo "<h3>Начинаю выводить цифру</h3>";
    echo "<p>$num</p>";
    echo "<h3>Заканчиаю выводить цифру</h3>";
endforeach;

?>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia quam quis repudiandae vitae. Accusamus amet

    <?php foreach ($nums as $num): ?>
        <?= "<p>$num</p>"; ?>
    <?php endforeach; ?>

    dignissimos expedita explicabo facilis illo impedit in, iusto libero, nulla, quis quod ullam unde voluptatibus.</p>

</body>
</html>
