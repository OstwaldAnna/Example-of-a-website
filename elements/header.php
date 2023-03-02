<?php
    session_start();
?>
<!-- Начало главного меню -->
<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <img class="bi me-2" width="40" height="32" alt="logo" src="/resources/image/logo.png">
        <span class="fs-4" style="margin-right: 2.5rem;" >DefaultShop</span>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="./index.php" class="nav-link px-2 text-white">О нас</a></li>
          <li><a href="./catalog.php" class="nav-link px-2 text-white">Каталог</a></li>
          <li><a href="./adress.php" class="nav-link px-2 text-white">Где нас найти?</a></li>
          <?php
            if (isset($_SESSION['user'])){
              if($_SESSION['user']['login'] == "admin"){
                echo "<li><a href=\"./allorders.php\" class=\"nav-link px-2 text-white\">ВСЕ Заказы</a></li>";
              }else{
                echo "<li><a href=\"./myorders.php\" class=\"nav-link px-2 text-white\">Мои Заказы</a></li>";
              }
            }
          ?>
        </ul>
        <?php
          if(!isset($_SESSION['user'])){
            echo "<div class=\"text-end\">
                    <a href=\"./login.php\" class=\"btn btn-outline-light me-2\">Вход</a>
                    <a href=\"./registration.php\" class=\"btn btn-warning\">Регистрация</a>
                  </div>";
          }else{
            echo "<div class=\"text-end\">
                    <p class=\"fw-bold\">" . $_SESSION['user']['login'] . "</p>
                    <a href=\"./basket.php\" class=\"btn btn-outline-light me-2\">Корзина</a>
                    <a href=\"./vendor/logout.php\" class=\"btn btn-warning\">Выйти</a>
                  </div>";
          }
        ?>
      </div>
  </div>
  
</header>
<!-- Конец главного меню -->