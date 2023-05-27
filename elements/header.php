<?php
    session_start();
?>
<!-- Меню обычного пользователя -->
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
  <img  style="margin: 0.5rem;" class="border border-dark" src="/resources/images/logo.png" height="50" width="50">
        <p class="fs-4 fw-bold text-black" style="margin-right: 2.5rem;">Music House</p>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <li><a class="nav-link active" aria-current="page" href="/index.php" class="nav-link px-2 text-white">О нас</a></li>
        <li><a class="nav-link" href="../pages/catalog.php" class="nav-link px-2 text-white">Каталог</a></li>
        <li><a class="nav-link" href="../pages/adress.php" class="nav-link px-2 text-white">Где нас найти?</a></li>
        <?php
          if(!isset($_SESSION['user'])){
            echo "<div class=\"text-end\">
                    <a href=\"../pages/login.php\" style=\"margin: 0.5rem\" class=\"btn btn-outline-secondary\">Вход</a>
                    <a href=\"../pages/registration.php\" class=\"btn btn-outline-secondary\">Регистрация</a>
                  </div>";
          }else{
            echo "<div class=\"text-end\">
                    <p class=\"fw-bold\">" . $_SESSION['user']['login'] . "</p>
                    <a href=\"../pages/basket.php\" class=\"btn btn-outline-secondary\">Корзина</a>
                    <a href=\"../my_orders.php\" class=\"btn btn-outline-secondary\">Ваши заказы</a>
                    <a href=\"../vendor/logout.php\" class=\"btn btn-outline-secondary\">Выйти</a>
                  </div>";
          }
        ?>
      </div>
    </div>
  </div>
</nav>
