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
        echo "Файл успешно загружен.";
    } else {
        echo "Произошла ошибка при загрузке файла.";
    }
}

echo '</br><a href="/index.php">Вернуться назад</a>';