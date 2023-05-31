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
            <p class="fw-bold f30">Регистрация</p>
            <!-- Форма регистрации -->
            <form class="needs-validation" novalidate method="POST" action="../vendor/signup.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Имя</label>
                <input type="text" class="form-control" name="name" pattern="[А-Яа-яЁё]+" required id="" aria-describedby="">
                <div class="invalid-feedback">
                    Пожалуйста, введите имя пользователя.
                </div>
                <div id="" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Фамилия</label>
                <input type="text" class="form-control" name="surname" pattern="[А-Яа-яЁё]+" required id="" aria-describedby="">
                <div class="invalid-feedback">
                    Пожалуйста, введите фамилию пользователя.
                </div>
                <div id="" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Отчество</label>
                <input type="text" class="form-control" name= "patronymic" pattern="[А-Яа-яЁё]+" id="" aria-describedby="">
                <div id="" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Логин</label>
                <input type="text" class="form-control" name="login" required id="" pattern="[\x1F-\xBF]*" aria-describedby="">
                <div class="invalid-feedback">
                    Логин должен содержать латинские буквы
                </div>
                <div id="" class="form-text"></div>
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Электронная почта</label>
            <input type="email" class="form-control" name="email" required id="exampleInputEmail1" aria-describedby="">
            <div class="invalid-feedback">
                Неверный адрес почты
            </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="password" pattern="[A-Za-Z].{.8,}" name="password" required>
                <div class="invalid-feedback">
                    Пожалуйста, введите пароль.
                </div>
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Подтвердите пароль</label>
                <input type="password" class="form-control" name="rpassword" id="confirm_password" name="confirm_password" required>
                <div class="invalid-feedback">
                    Пароли не совпадают.
                </div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" required id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1" >Согласен с правилами регистрации</label>
            </div>
            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>    
            </form>
        <!-- Форма регистрации -->
        </div>
        <div class="col m30">
            <img src="/resources/images/11.jpeg" alt="image" class="img_obj_fit img_h700_w600">
        </div>
    </div>
</div>

<?php
include('../elements/footer.php');
?> 
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script>
// Включение валидации формы
(function () {
'use strict';
var forms = document.querySelectorAll('.needs-validation');
Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener('submit', function (event) {
    if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
    }
    var password = document.getElementById("password");
    var confirm_password = document.getElementById("confirm_password");

    if (password.value !== confirm_password.value) {
        confirm_password.setCustomValidity("Пароли несовпадают");
    } else {
        confirm_password.setCustomValidity("");
    }

    form.classList.add('was-validated');
}, false);
});
})();
</script>

</body>
</html>