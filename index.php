<!DOCTYPE html>
<?php
require_once('connect.php');
require_once('functions.php');
?>

<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<!-- Responsive navbar-->
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <form action="index.php" method="post" class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Поиск" name="search"
                               aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Искать</button>
                    </form>
                </ul>
                <?php if (checkAuth()): ?>
                    <?= ("<h4>Добро пожаловать, " . $_SESSION['user_name'] . "</h4>") ?>
                    <?php if (isAdmin()): ?>
                        <form action="addbook.php" method="post" class="d-flex">
                            <button style="margin-left: 20px;" class="btn btn-outline-success">Добавить книгу</button>
                        </form>
                    <?php endif; ?>
                    <form action="exit.php" method="post" class="d-flex">
                        <button style="margin-left: 20px;" class="btn btn-outline-success">Выход</button>
                    </form>
                <?php else: ?>
                    <form action="login.php" method="post" class="d-flex">
                        <button class="btn btn-outline-success">Вход</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</header>
<!-- Begin page content -->
<main class="flex-shrink-0">
    <div class="container">
        <!-- Content Row-->
        <div class="row gx-4 gx-lg-5">
            <?php
            $books = checkAuth() ? getBooks() : [];
            if (!empty($books)) {
                foreach ($books as $row) { ?>
                    <div class="col-md-4 mb-5">
                        <div class="card h-100">
                            <div class="card-body">
                                <a href="/img/<?= $row['image_path'] ?>" data-toggle="lightbox">
                                    <img src="/img/cropped/<?= $row['image_path'] ?>">
                                </a>
                                <h2 class="card-title"><?= $row['title'] ?></h2>
                                <p class="card-text">Год выпуска: <?= $row['publication_year'] ?></p>
                                <p class="card-text">Количество страниц: <?= $row['page_number'] ?></p>
                                <p class="card-text">Авторы: <?= $row['authors'] ?></p>
                            </div>
                            <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Перейти</a></div>
                        </div>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <h2 class="card-title">Книги не найдены.</h2>
            <?php } ?>
        </div>
    </div>
</main>
<!-- Footer-->
<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">Homework Library 2024</span>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
</body>
</html>
