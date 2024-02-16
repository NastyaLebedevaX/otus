<?php

function getData(): array
{
    $targetCroppedDir = __DIR__ . '/img/cropped';
    $data = [];

    if (!is_dir($targetCroppedDir)) {
        mkdir($targetCroppedDir);
    } else {
        $imgScan = scandir(realpath($targetCroppedDir));

        if (is_array($imgScan)) {
            // Удалить первые два элемента: '.' and '..'
            $data = array_slice($imgScan, 2);
        }
    }

    return $data;
}
