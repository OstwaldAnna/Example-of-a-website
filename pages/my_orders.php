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
  include ('../elements/header.php');
?>

<div class="mt-5 text-center" style=" margin-left: 3rem">
        <div class="row">
          <div class="col">
            <p class="fw-bold" style="font-size: 50px;">Мои заказы</p>
          </div>
        </div>
    </div>
    <!-- Начало вывода списка заказов -->
    <div class="container">
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Количество</th>
                    <th scope="col">Названия</th>
                    <th scope="col">Статус</th>
                    <th scope="col">Комментарий</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            <?php
                require_once '../vendor/render_element.php';

                $render_class = new RenderElement();
                $render_class->renderOrderItems();
            ?>
            </tbody>
        </table>
        <!-- Конец вывода списка заказов -->
    </div>

    <?php
      include ('../elements/footer.php');
    ?>

<script src="/bootstrap/js/bootstrap.js" ></script> 
</body>
</html>