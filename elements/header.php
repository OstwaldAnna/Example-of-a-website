<?php
    session_start();
?>
<!-- Меню обычного пользователя -->
  <nav class="navbar navbar-expand-md navbar-light navbar-toggleable">
    <div class="container-fluid ">
      <img class="border border-dark m05" src="/resources/images/logo.png" height="50" width="50">
      <p class="fs-4 fw-bold text-black m25">Music House</p>
      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <li><a href="/index.php" aria-current="page" class="nav-link active">О нас</a></li>
          <li><a href="../pages/catalog.php" class="nav-link">Каталог</a></li>
          <li><a href="../pages/adress.php" class="nav-link">Где нас найти?</a></li>
        </div>
        <?php
          if(!isset($_SESSION['user'])):?>
            <div class="text-end">
              <a href="../pages/login.php" class="btn btn-outline-secondary m05">Вход</a>
              <a href="../pages/registration.php" class="btn btn-outline-secondary ">Регистрация</a>
            </div>
          <? else:?>
            <div class="text-end">
              <a href="../pages/basket.php" class="btn btn-outline-secondary">Корзина</a>
              <a href="../pages/my_orders.php" class="btn btn-outline-secondary">Ваши заказы</a>
              <a href="../pages/profile.php" class="btn btn-outline-secondary">Профиль</a>
              <a href="../vendor/logout.php" class="btn btn-outline-secondary">Выйти</a>
            </div>
        <? endif;?>
      </div>
    </div>
  </nav>
