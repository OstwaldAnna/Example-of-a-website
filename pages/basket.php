<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <title>Корзина</title>
</head>
<body>
<?php
  include ('../elements/header.php');
?>
    
    <div class="container mt-5 text-start">
        <div class="row">
          <div class="col">
            <p class="fw-bold f50">Корзина</p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <a href="catalog.php" class="btn btn-dark">Вернуться в каталог</a>
          </div>
        </div>
    </div>

    <form method="post" action="../vendor/refresh_cart.php" class="container">
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">Товар</th>
                    <th scope="col">Название товара</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Количество</th>
                    <th scope="col">Цена</th>
                </tr>
            </thead>
            <tbody>
                
                <?php 
                    require_once '../vendor/render_element.php';

                    $render_class = new RenderElement();
                    $render_class->renderCartItems();
                    $render_class->renderTotalPrice();
                ?>

            </tbody>
        </table>
        <div>
            <button class="btn btn-dark">Оформить заказ</a>
        </div>
    </form>

    <?php
      include ('../elements/footer.php');
    ?>

<script src="/bootstrap/js/bootstrap.js" ></script> 
</body>
</html>