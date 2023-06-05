<!-- Регистрация пользователя -->
<?php
  session_start();
  require_once 'connect.php';

  // Передача данных в БД
  $surname = $_POST['surname'];
  $name = $_POST['name'];
  $patronymic = $_POST['patronymic'];
  $login = $_POST['login'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $password_confirm = md5($_POST['password_confirm']);
  $check = $_POST['check'];

  if ($password === $password_confirm && $check == "Yes") {
    $db = new Database();
    $result = $db->query("INSERT INTO `user` (`id`, `surname`, `name`, `patronymic`, `login`, `email`, `password`) 
                          VALUES (NULL, '$surname', '$name', '$patronymic', '$login', '$email', '$password')");
    $_SESSION['message'] = 'Регистрация прошла успешно';
    header('Location: ../pages/login.php');
  } else {
    $_SESSION['message'] = 'Пароли не совпадают или проверьте галочку';
    header('Location: ../pages/registration.php');
  }
  ?>