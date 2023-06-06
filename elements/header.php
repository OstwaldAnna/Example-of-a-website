<?php
    session_start();
?>
<!-- Меню обычного пользователя -->

  <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-toggleable">
    <div class="container">
      <img class="border border-dark m05" src="/resources/images/logo.png" height="50" width="50">
      <p class="fs-4 fw-bold text-white m25">Music House</p>
      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

        <div class="navbar-nav container">
          <li><a href="/index.php" aria-current="page" class="nav-link">О нас</a></li>
          <li><a href="../pages/catalog.php" class="nav-link">Каталог</a></li>
          <li><a href="../pages/adress.php" class="nav-link">Где нас найти?</a></li>
        </div>
        <div class="container text-end">
        <?php
          if(!isset($_SESSION['user'])):?>
            <div >
              <a href="../pages/login.php" class="btn btn-outline-secondary m05">Вход</a>
              <a href="../pages/registration.php" class="btn btn-outline-secondary ">Регистрация</a>
            </div>
          <? else:?>
            <div >
              <a href="../pages/basket.php" class="btn btn-outline-secondary">Корзина</a>
              <a href="../pages/my_orders.php" class="btn btn-outline-secondary">Ваши заказы</a>
              <a href="../pages/profile.php" class="btn btn-outline-secondary">Профиль</a>
              <a href="../vendor/logout.php" class="btn btn-outline-secondary">Выйти</a>
            </div>
        <? endif;?>
        </div>
      </div>
    </div>
  </nav>
