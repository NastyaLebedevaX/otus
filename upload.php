<?php

$targetDir = "img/";
$targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

if (isset($_POST["submit"])) {
    // Проверка размера файла
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Файл слишком большой.";
        $uploadOk = 0;
    }

    // Разрешенные форматы файлов
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    if (!in_array($imageFileType, $allowedExtensions)) {
        echo "Разрешены только файлы JPG, JPEG, PNG и GIF.";
        $uploadOk = 0;
    }

    // Проверка наличия ошибок и загрузка файла
    if ($uploadOk == 1 && move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        createCroppedImage($_FILES["fileToUpload"]["name"], 250, 250);
        echo "Файл успешно загружен.";
    } else {
        echo "Произошла ошибка при загрузке файла.";
    }
}

header('Location:/index.php');

function createCroppedImage($imageName, $newWidth, $newHeight): void
{
// Путь к оригинальному изображению
    $originalImagePath = 'img/' . $imageName;
// Загрузка оригинального изображения
    $originalImage = imagecreatefromjpeg($originalImagePath);
    chmod($originalImagePath, 0777);

// Получение размеров оригинала
    $originalWidth = imagesx($originalImage);
    $originalHeight = imagesy($originalImage);

// Создание пустого изображения с новыми размерами
    $smallImage = imagecreatetruecolor($newWidth, $newHeight);

// Копирование и уменьшение изображения
    imagecopyresampled($smallImage, $originalImage, 0, 0, 0, 0, $newWidth, $newHeight, $originalWidth, $originalHeight);

// Сохранение уменьшенной копии
    $targetCroppedDir = realpath(__DIR__ . '/img/cropped/');
    imagejpeg($smallImage, $targetCroppedDir);

// Освобождение ресурсов
    imagedestroy($originalImage);
    imagedestroy($smallImage);
}