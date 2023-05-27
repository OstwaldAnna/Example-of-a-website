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
    <title>Регитсрация</title>
</head>
<body>
<?php
include('../elements/header.php');
?>

    <div class="container mt-3 text-center">
        <div class="row">
            <div class="col">
            <p class="fw-bold" style="font-size: 30px;">Регистрация</p>
            <!-- Форма регистрации -->
            <form method="post" action="../vendor/signup.php">
                <div class="row g-3">
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="name" placeholder="Имя" value="" required="">
                    </div>

                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="surname" placeholder="Фамилия" value="" required="">
                    </div>

                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="patronymic" placeholder="Отчество" value="" required="">
                    </div>

                    <div class="col-12">
                        <input type="text" class="form-control" name="login" placeholder="Логин" required="">

                    </div>

                    <div class="col-12">
                        <input type="email" class="form-control" name="email" placeholder="email">
                    </div>

                    <div class="col-12">
                        <input type="password" class="form-control" name="password" placeholder="Пароль" required="">
                    </div>

                    <div class="col-12">
                    <input type="password" class="form-control" name="repeat" placeholder="Повторите пароль">
                    </div>
                </div>
            <hr class="my-4">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="rules" value="Yes">
                <label class="form-check-label" for="same-address">Я согласен(а) с условиями пользовательского соглашения</label>
            </div>
                <button class="w-50 btn btn-warning" type="submit">Зарегистрироваться</button>
            <?php 
                if ($_SESSION['message']){
                    echo '<p class="msg">' . $_SESSION['message'] . '</p>';
                }
                unset($_SESSION['message']);
            ?>
            </form>
        <!-- Форма регистрации -->
        </div>
        <div class="col" style="margin-left: 3rem;">
            <img src="/resources/images/11.jpg" style="object-fit: none" alt="image" height="700" width="600">
        </div>
    </div>
</div>

<?php
include('../elements/footer.php');
?> 
<script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>