<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<?php
$imgScan = scandir(realpath(__DIR__ . '/img'));
$data = [];

if (is_array($imgScan)) {
// Удалить первые два элемента: '.' and '..'
    $data = array_slice($imgScan, 2);
}
?>

<body>
<h1>Gallery</h1>

<form class="upload" action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Загрузить картинку" name="submit">
</form>

<div class="container">
    <?php
    foreach ($data as $img) {
        echo '<a target="_blank" href="/img/' . $img . '"><img src="/img/' . $img . '"></a>';
    }
    ?>
</div>
</body>

</html>