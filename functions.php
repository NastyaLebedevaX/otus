<?php

function checkAuth(): bool
{
    return !empty($_SESSION['user_id']);
}

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

function downloadFile(): void
{
    $targetDir = "img/";
    $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
    $errors = [];

    // Проверка размера файла
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        $errors[] = 'Файл слишком большой';
    }

    // Разрешенные форматы файлов
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    if (!in_array($imageFileType, $allowedExtensions)) {
        $errors[] = 'Разрешены только файлы JPG, JPEG, PNG и GIF.';
    }

    if (!empty($errors)) {
        setNotification(implode("<br>", $errors));
    } elseif (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        createCroppedImage($_FILES["fileToUpload"]["name"], 250, 250);
        setNotification('Файл успешно загружен');
    }
}

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
    $targetCroppedDir = 'img/cropped/' . $imageName;
    imagejpeg($smallImage, $targetCroppedDir);

    // Освобождение ресурсов
    imagedestroy($originalImage);
    imagedestroy($smallImage);
}

function registration(): void
{
    // Проверка занятости имени пользователя
    $sql = getDbConnection()->prepare("SELECT * FROM users WHERE username = :username");
    $sql->execute(['username' => $_POST['username']]);

    if ($sql->rowCount() < 0) {
        // Добавление пользователя
        $stmt = getDbConnection()->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $stmt->execute([
            'username' => $_POST['username'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
        ]);
    } else {
        setNotification('Пользователь уже зарегистрирован.');
        header('Location: registration.php');
        return;
    }

    header('Location: login.php');
}

function setNotification(string $string): void
{
    $_SESSION['notification'] = $string;
}

function getNotifications(): string
{
    if (empty($_SESSION['notification'])) {
        return '';
    }

    $notification = '<h3 style="margin: 10px auto;">' . $_SESSION['notification'] . '</h3>';
    $_SESSION['notification'] = null;

    return $notification;
}

function login(): void
{
    // Проверка наличия пользователя с указанным username
    $sql = getDbConnection()->prepare('SELECT * FROM users WHERE username = :username');
    $sql->execute(['username' => $_POST['username']]);

    if (!$sql->rowCount()) {
        setNotification('Пользователь не найден.');
        header('Location: login.php');
        return;
    }

    $user = $sql->fetch(PDO::FETCH_ASSOC);

    // Проверка введенного пароля
    if (password_verify($_POST['password'], $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header('Location: /');
        return;
    }

    setNotification('Некорректный пароль. Авторизация невозможна');
}