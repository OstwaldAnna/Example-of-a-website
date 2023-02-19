<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <title>Авторизация</title>
</head>
<body>
    <?php
  include ('./elements/header.php');
    ?>
    
    <div class="container mt-5 text-center">
      <div class="row">
        <div class="col">
          <p class="fw-bold" style="font-size: 50px;">Авторизация</p>
        </div>
        </div>
        <form action="vendor/signin.php" method="post">
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" id="login" name="login" placeholder="Логин" value="" required="">
            </div>
          </div>
          <div class="row mt-3">
            <div class="col">
              <input type="text" class="form-control" id="password" name="password" placeholder="Пароль" value="" required="">
              <button class="btn btn-primary btn-lg btn-block; mt-3" type="submit">Авторизация</button>
            </div>
          </div>
      <?php 
        if ($_SESSION['message']){
            echo '<p class="msg">' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);
    ?>
        </form>
      </div> 

    <?php
        include ('./elements/footer.php');
    ?>

<script src="/bootstrap/js/bootstrap.js" ></script> 
</body>
</html>