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
        <p class="fw-bold f30">musichouse</p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p class="f20">Здесь будет девиз компании ы по типу: наш девиз 4 слова - чтоб горела наша школа </p>
      </div>
    </div>
  </div>

  <div class="container mt-5 text-center">
    <div class="row">
      <div class="col">
        <p class="fw-bold f30">Новинки компании</p>
      </div>
    </div>
  </div>

  <!-- Карусель -->
  <div class="container text-center">
    <div id="carouselExampleDark" class="carousel carousel-dark slide " data-bs-ride="carousel">
      <div class="carousel-indicators " >
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5s"></button>
      </div>
      <div class="carousel-inner">
      <?php
        require_once 'vendor/render_element.php';

        $render_class = new RenderElement();
        $render_class->renderCarousel();
      ?>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Следующий</span>
        </button>
      </div>
    </div>
  </div>

  <?php
  include('./elements/footer.php');
  ?>


  <script src="/bootstrap/js/bootstrap.js"></script>
</body>

</html>
`