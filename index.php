<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<?php
require_once 'connect.php';
require_once 'functions.php';
?>

<body>
<h1>Галерея фото</h1>

<?php if (checkAuth()): ?>
    <form class="upload" action="index.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Загрузить картинку" name="submit">
    </form>

    <?php
    if (isset($_POST["submit"])) {
        downloadFile();
    }
    ?>

    <div class="login-form">
        <?= getNotifications();?>
        <div class="action">
            <a style="width: 100%;" href="exit.php">
                <button>Выход</button>
            </a>
        </div>
    </div>
<?php else: ?>
    <h3 style="margin: 0 auto;">Необходимо войти для добавления фото</h3>

    <div class="login-form">
        <div class="action">
            <a style="width: 100%;" href="login.php">
                <button>Вход</button>
            </a>
        </div>
    </div>
<?php endif; ?>

<div class="container">
    <?php
    $images = getData();

    if (!empty($images)) {
        foreach ($images as $img) {
            echo '<a target="_blank" href="/img/' . $img . '"><img src="/img/cropped/' . $img . '"></a>';
        }
    } else {
        echo '<h2>Изображения не найдены</h2>';
    }
    ?>
</div>
</body>

</html>