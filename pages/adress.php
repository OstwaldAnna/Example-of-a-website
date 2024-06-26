<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <title>Где нас найти?</title>
</head>
<body>
    <!-- Вывод меню пользователя -->
    <?php
    include('../elements/header.php');
    ?>

    <div class="container mt-3 text-center">
        <div class="col">
            <p class="fw-bold f30">Где нас найти?</p>
        </div>
    </div>
    <div class="container mt-3 text-center">
        <div class="row">
            <div class="col">
                <img src="/resources/images/map.jpg" alt="map" class="adress">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <p class="fs-5"><b>Адрес:</b> Линенградское шоссе 13А</p>
                <p class="fs-5"><b>Номер телефона:</b> 8 (800) 555-35-35</p>
                <p class="fs-5"><b>email:</b> flower@gmail.com</p>
            </div>
        </div>
    </div>

    <!-- Вывод подвала -->
    <?php
    include('../elements/footer.php');
    ?> 
    <script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>