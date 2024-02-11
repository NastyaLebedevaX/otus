<?php

/**
* Задание №1
*/
function task1(): void
{
    $number = 1;

    while ($number < 100) {
        if ($number % 3 == 0) {
            echo $number++ . ' ';
        }

        $number++;
    }
}

/**
 * Задание №2
*/
function task2(): void
{
    $number = 0;
    do {
        if ($number == 0) {
            echo $number . ' – это ноль.' . PHP_EOL;
            $number++;
        } elseif ($number % 2 != 0) {
            echo $number . ' – нечетное число.' . PHP_EOL;
            $number++;
        } else {
            echo $number . ' – четное число.' . PHP_EOL;
            $number++;
        }
    } while ($number < 11);
}

/**
 * Задание №3
*/
function task3(): void
{
    $area = [
        'Московская область:' => ['Москва', 'Зеленоград', 'Клин'],
        'Ленинградская область:' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
        'Волгоградская область:' => ['Волгоград', 'Волжский', 'Камышин', 'Урюпинск']
    ];

    foreach ($area as $key => $value) {
        echo $key . PHP_EOL;

        for ($i = 0; $i < count($area[$key]); $i++) {
            if ($i == count($area[$key]) - 1) {
                echo $area[$key][$i] . '.' . PHP_EOL;
            } else {
                echo $area[$key][$i] . ', ';
            }
        }
    }
}

/**
 * Задание №4
*/
function task4($val): void
{
    $data = array(
        "а" => "a",
        "б" => "b",
        "в" => "v",
        "г" => "g",
        "д" => "d",
        "е" => "e",
        "ё" => "yo",
        "ж" => "zh",
        "з" => "z",
        "и" => "i",
        "й" => "y",
        "к" => "k",
        "л" => "l",
        "м" => "m",
        "н" => "n",
        "о" => "o",
        "п" => "p",
        "р" => "r",
        "с" => "s",
        "т" => "t",
        "у" => "u",
        "ф" => "f",
        "х" => "h",
        "ц" => "ts",
        "ч" => "ch",
        "ш" => "sh",
        "щ" => "s'h",
        "ъ" => "",
        "ы" => "i",
        "ь" => "'",
        "э" => "e",
        "ю" => "yu",
        "я" => "ya",
        " " => " "
    );

    $word = strtr($val, $data);
    echo $word;
}

/**
 * Задание №5
 */
function task5($val): void
{
    echo str_replace(" ", "_", $val);
}

echo task1() . "</br>";
echo task2() . "</br>";
echo task3() . "</br>";
echo task4("доброе утро") . "</br>";
echo task5("в этой жизни ты либо волк, либо не волк") . "</br>";