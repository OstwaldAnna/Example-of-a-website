<!-- Авторизация пользователя -->
<?php
    session_start();
    require_once 'connect.php';

    //Передача данных в БД
    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $db = new Database();
    $result = $db->query("SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'"); //Проверка есть ли такой пользователь
    if (mysqli_num_rows($result) > 0){
      $user = $result->fetch_assoc();
      $_SESSION['user'] = $user;
      if ($_SESSION['user']['login'] == "admin"){
        header('Location: ../admin.php');
      } else {
        header('Location: ../index.php');
      }
    }
    else {
      $_SESSION['message'] = "Такого пользователя не существует";
      header('Location: ../pages/login.php');
    }
  ?>

