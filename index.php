<?php
require_once('vendor/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">
  <title>О нас</title>
</head>

<body>

  <?php
  include('./elements/header.php');
  ?>

  <div class="container mt-5 text-center">
    <div class="row">
      <div class="col">
        <img width="100" height="100" alt="logo" src="/resources/images/logo.png">
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p class="fw-bold" style="font-size: 30px;">musichouse</p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p style="font-size: 20px;">Здесь будет девиз компании ы по типу: наш девиз 4 слова - чтоб горела наша школа </p>
      </div>
    </div>
  </div>

  <div class="container mt-5 text-center">
    <div class="row">
      <div class="col">
        <p class="fw-bold" style="font-size: 30px;">Новинки компании</p>
      </div>
    </div>
  </div>

  <?php
  include('elements/carousel.php');
  ?>

  <?php
  include('./elements/footer.php');
  ?>


  <script src="/bootstrap/js/bootstrap.js"></script>
</body>

</html>
`