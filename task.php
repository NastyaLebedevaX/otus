<?php

/**
* Задание №1
*/
function task1() : string
{
    $data = [];
    $number = 1;

    while ($number < 100) {
        if ($number % 3 == 0) {
            $data[]  = $number++;
        }

        $number++;
    }

    return implode(' ', $data);
}

/**
 * Задание №2
*/
function task2(): string
{
    $number = 0;
    $data = [];

    do {
        if ($number == 0) {
            $data[] = $number . ' – это ноль.';
        } elseif ($number % 2 != 0) {
            $data[] = $number . ' – нечетное число.';
        } else {
            $data[] = $number . ' – четное число.';
        }

        $number++;
    } while ($number < 11);

    return implode("</br>", $data);
}

/**
 * Задание №3
*/
function task3(): string
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
                return $area[$key][$i] . '.' . PHP_EOL;
            } else {
                return $area[$key][$i] . ', ';
            }
        }
    }
}

/**
 * Задание №4
*/
function task4($val): string
{
    $data = [
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
    ];

    $word = strtr($val, $data);
    return $word;
}

/**
 * Задание №5
 */
function task5($val): string
{
    return str_replace(" ", "_", $val);
}