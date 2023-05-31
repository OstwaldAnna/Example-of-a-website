<?php
include "../PhpConnect/connect.php";

include ("../PhpTemplate/authdate.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MusicHouse</title>
</head>
<body>
<?php
include ("../PhpTemplate/header.php");
?>

<main>
<div class="container">
    <form class="needs-validation" novalidate method="POST" action="../PhpConnect/connectReg.php">
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

</div>
</main>