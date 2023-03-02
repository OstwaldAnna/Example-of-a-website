<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = $_POST['password'];

    $check_user = mysqli_query($connect, "SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0){
        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user'] = $user;
        $_SESSION['message'] = 'Вы успешно вошли в систему' ;
    header('Location: ../index.php');
    }else{
    $_SESSION['message'] = 'Не верный логин или пароль' ;
    header('Location: ../login.php');
  }
  ?>

