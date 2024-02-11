<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<h2>Где обитает Аляскинский волк?</h2>
<?php
$data = [
    "Западные части США",
    "Часть Западной Канады",
    "Остров Унимак Алеутского архипелага",
    "Аляска",
    "Йеллоустон и центральный Айдахо"
];

echo('<ul>');

foreach ($data as $val) {
    echo('<li>' . $val . '</li>');
}

echo('</ul>');

$menu = [
    'овощи' => ['огурцы', 'помидоры', 'картофель'],
    'фрукты' => ['апельсины', 'бананы', 'яблоки']
];

foreach ($menu as $key => $value) {
    echo '<ul>' . $key;

    foreach ($value as $val) {
        echo '<li>' . $val . '</li>';
    }

    echo '</ul>';
}
?>
</body>

<?php
require_once 'task.php';
?>

</html>