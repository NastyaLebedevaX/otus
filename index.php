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
require_once 'gallery.php';
?>

<body>
<h1>Gallery</h1>

<form class="upload" action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Загрузить картинку" name="submit">
</form>

<div class="container">
    <?php
    foreach (getData() as $img) {
        echo '<a target="_blank" href="/img/' . $img . '"><img src="/img/cropped/' . $img . '"></a>';
    }
    ?>
</div>
</body>

</html>