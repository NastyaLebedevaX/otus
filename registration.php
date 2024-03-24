<!DOCTYPE html>
<?php
require_once('connect.php');
require_once('functions.php');

if (isset($_POST["registration"])) {
    registration();
}
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

                </ul>
                <form action="login.php" method="post" class="d-flex">
                    <button class="btn btn-outline-success">Вход</button>
                </form>
            </div>
        </div>
    </nav>
</header>
<main class="flex-shrink-0">
    <div class="container">
        <!-- Login 2 - Bootstrap Brain Component -->
        <div class="py-3 py-md-5">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
                        <div class="bg-white p-4 p-md-5 rounded shadow-sm">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-5">
                                        <?= getNotifications();?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-5">
                                        <h3>Регистрация аккаунта</h3>
                                    </div>
                                </div>
                            </div>
                            <form action="registration.php" method="post">
                                <div class="row gy-3 gy-md-4 overflow-hidden">
                                    <div class="col-12">
                                        <label for="username" class="form-label">Login <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="username" id="username" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="password" class="form-label">Пароль <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" name="password" id="password" value="" required>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button name="registration" class="btn btn-lg btn-primary" type="submit">Регистрация</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">Homework Library 2024</span>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
