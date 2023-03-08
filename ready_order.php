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
    <title>Подтверждение заказа</title>
</head>
<body>
    <?php
  include ('./elements/header.php');
    ?>

    <div class="mt-5 text-start" style=" margin-left: 3rem">
        <div class="row">
          <div class="col">
            <p class="fw-bold" style="font-size: 50px;">Подтвердите заказ</p>
          </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="same-address">
                    <label class="form-check-label" for="same-address">Выбрать все</label>
                    <a href="..." style="margin-left: 1rem;">Удалить выбранное</a>
                </div>
            </div>
        </div>
    </div>
    
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
                include('./vendor/spawn_cart_item.php');
            ?>

        </tbody>
    </table>
    
    
    <div class="container">
        <div class="col">
            <p class="text-start" style="font-size: 20px;"><b>Ваше имя:</b> Иванова анастасия</p>
            <p class="text-start" style="font-size: 20px;"><b>Почта:</b> DefaultShap2022@mail.ru</p>
            <p class="text-start" style="font-size: 20px;"><b>Телефон:</b> +79999999999</p>
            <p class="text-start" style="font-size: 20px;"><b>Конечная цена:</b> 500р</p>
                <div class="container text-end">
                    <a class="btn btn-success" href="ready_order.php">Подтвердите ваш заказ</a>
                </div>
        </div>
    </div>

    <?php
        include ('./elements/footer.php');
    ?>

<script src="/bootstrap/js/bootstrap.js" ></script> 
</body>
</html>