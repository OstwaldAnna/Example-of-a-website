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
    
    <div class="mt-5 text-start" style=" margin-left: 3rem">
        <div class="row">
          <div class="col">
            <p class="fw-bold" style="font-size: 50px;">Корзина</p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <a href="catalog.php" class="btn btn-warning">Вернуться в каталог</a>
          </div>
        </div>
    </div>

    <form method="post">
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Товар</th>
                    <th scope="col">Название товара</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Количество</th>
                    <th scope="col">Цена</th>
                </tr>
            </thead>
            <tbody>
                
                <?php 
                    include('../vendor/spawn_cart_item.php');
                ?>

            </tbody>
        </table>
        <div class="container text-end">
            <a href="/ready_order.php" class="btn btn-warning">Оформить заказ</a>
        </div>
    </form>

    <?php
      include ('../elements/footer.php');
    ?>

<script src="/bootstrap/js/bootstrap.js" ></script> 
</body>
</html>