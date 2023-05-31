<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <title>Авторизация</title>
</head>

<body>
    <?php
    include('../elements/header.php');
    ?>

    <div class="container mt-3 text-center">
        <div class="row">
            <div class="col">
                <p class="fw-bold f30">Авторизация</p>
                <!-- Форма авторизации -->
                <form method="post" action="../vendor/signin.php">
                    <div class="row g-3">
                        <div class="col-12">
                            <input type="text" class="form-control" name="login" placeholder="Логин" required="">
                        </div>

                        <div class="col-12">
                            <input type="password" class="form-control" name="password" placeholder="Пароль" required="">
                        </div>
                    </div>
                    <button class="w-50 btn btn-warning mt-3" type="submit">Войти</button>
                </form>
                <!-- Форма авторизации -->
                <?php
                if ($_SESSION['message']) {
                    echo '<p class="msg">' . $_SESSION['message'] . '</p>';
                }
                unset($_SESSION['message']);
                ?>
            </div>
            <div class="col m30">
                <img src="/resources/images/16.jpeg" class="img_obj_fit img_h700_w600" alt="image">
            </div>
        </div>
    </div>

    <?php
    include('../elements/footer.php');
    ?>
    <script src="/bootstrap/js/bootstrap.js"></script>
</body>

</html>