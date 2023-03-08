<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <title>Мои заказы</title>
</head>
<body>
<?php
  include ('./elements/header.php');
?>

    <div class="mt-5 text-start" style=" margin-left: 3rem">
        <div class="row">
          <div class="col">
            <p class="fw-bold" style="font-size: 50px;">Мои заказы</p>
          </div>
        </div>
    </div>
    
    <table class="table mt-5">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Дата заказа</th>
                <th scope="col">Количество позиций</th>
                <th scope="col">Цена заказа</th>
                <th scope="col">Статус заказа</th>
                <th scope="col">Действие</th>
            </tr>
        </thead>
        <tbody>

        <?php
            include ('./vendor/spawn_order_item.php');
        ?>

        </tbody>
    </table>


    <?php
      include ('./elements/footer.php');
    ?>

<script src="/bootstrap/js/bootstrap.js" ></script> 
</body>
</html>