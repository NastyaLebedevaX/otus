<?php

function getData(): array
{
    $imgScan = scandir(realpath(__DIR__ . '/img'));
    $data = [];

    if (is_array($imgScan)) {
        // Удалить первые два элемента: '.' and '..'
        $data = array_slice($imgScan, 2);
    }

    return $data;
}