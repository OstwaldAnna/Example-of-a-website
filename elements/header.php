<?php
    session_start();
?>
<!-- Меню обычного пользователя -->
  <nav class="navbar navbar-expand-lg bg_header">
    <div class="container">
      <img class="border border-dark m05" src="/resources/images/logo.png" height="50" width="50">
      <p class="fs-4 fw-bold text-white m25">Music House</p>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <li><a href="/index.php" class="nav-link px-2 text-white">О нас</a></li>
          <li><a href="../pages/catalog.php" class="nav-link px-2 text-white">Каталог</a></li>
          <li><a href="../pages/adress.php" class="nav-link px-2 text-white">Где нас найти?</a></li>
        </div>
        <?php
          if(!isset($_SESSION['user'])):?>
            <div class="text-end">
              <a href="../pages/login.php" class="btn btn-outline-light">Вход</a>
              <a href="../pages/registration.php" class="btn btn-outline-light">Регистрация</a>
            </div>
          <? else:?>
            <div class="ml-3 text-end">
              <a href="../pages/basket.php" class="btn btn-outline-light">Корзина</a>
              <a href="../pages/my_orders.php" class="btn btn-outline-light">Ваши заказы</a>
              <a href="../pages/profile.php" class="btn btn-outline-light">Профиль</a>
              <a href="../vendor/logout.php" class="btn btn-outline-light">Выйти</a>
            </div>
        <? endif;?>
      </div>
    </div>
  </nav>
