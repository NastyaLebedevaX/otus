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
$a = -10;
$b = -5;
$result = 0;

if ($a >= 0 && $b >= 0) {
    $result = $a - $b;
    var_dump($result);
} else if ($a <= 0 && $b <= 0) {
    $result = $a * $b;
    var_dump($result);
} else {
    $result = $a + $b;
    var_dump($result);
}

$a = 10;

switch ($a) {
    case 10:
        echo "10 ";
    case 11:
        echo "11 ";
    case 12:
        echo "12 ";
    case 13:
        echo "13 ";
    case 14:
        echo "14 ";
    case 15:
        echo "15";
        break;
}

$echo = function($a) {
    for ($a = 10; $a <= 15; $a++) {
        if ($a > 15) {
            break;
        }
        echo $a;
    }
};

$result = match($a) {
    10 => $echo($a)
};

?>
</html>