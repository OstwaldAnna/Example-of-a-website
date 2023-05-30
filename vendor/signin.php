<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = $_POST['password'];

    $db = new Database();
    $result = $db->query("SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($result) > 0){
      $user = $result->fetch_assoc();
      $_SESSION['user'] = $user;
      $_SESSION['message'] = "Ваш пароль настолько красивый, что вы вошли в систему";
      if ($_SESSION['user']['login'] == "admin"){
        header('Location: ../admin.php');
      } else {
        header('Location: ../index.php');
      }
    }
  ?>

