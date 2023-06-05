  <?php
  session_start();
  require_once 'connect.php';

  $surname = $_POST['surname'];
  $name = $_POST['name'];
  $patronymic = $_POST['patronymic'];
  $login = $_POST['login'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $password_confirm = md5($_POST['password_confirm']);
  $check = $_POST['check'];

  $db = new Database();
  $check_login = $db->query("SELECT * FROM `user` WHERE `login` = '$login'");

  if(mysqli_num_rows($check_login) == 0){
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
  }
  ?>