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
</body>

<?php
/**
 * Задание №1
 */
function task1(): string
{
    $a = rand(-100, 100);
    $b = rand(-100, 100);

    $result = "Значение переменных: {$a}; {$b} </br>";

    if ($a >= 0 && $b >= 0) {
        $result .= 'Разность ' . ($a - $b);
    } elseif ($a < 0 && $b < 0) {
        $result .= 'Произведение ' . ($a * $b);
    } else {
        $result .= 'Сумма ' . ($a + $b);
    }

    return $result . '</br></br>';
}

/**
 * Задание №2
 */
function task2(int $currentNumber = null): string
{
    $limit = 15;
    $a = $currentNumber ?? rand(0, $limit);

    switch ($a) {
        case $a <= $limit:
            echo $a . '</br>';
            $a++;
            task2($a);
            break;
    }

    return '';
}

/**
 * Задание №3
 */
function task3(): string
{
    $limit = 15;
    $a = rand(0, $limit);

    return match($a) {
        default => implode(', ', range($a, $limit)),
    };
}

echo task1();
echo task2();
echo task3();
?>
</html>