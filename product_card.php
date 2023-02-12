<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php
        include ('./elements/header.php');
    ?>
    <div class="container mt-5 text-center">
        <div class="row">
          <div class="col">
            <img width="800" height="500" alt="map" src="/resources/image/1.jpg">
          </div>
          <div class="col">
            <p class="text-start"  style="font-size: 30px;"><b>Название товара</b></p>
            <p class="text-start" style="font-size: 20px;"><b>Цена:</b> 500</p>
            <p class="text-start" style="font-size: 20px;"><b>Страна производитель:</b> Айзербайджан</p>
            <p class="text-start" style="font-size: 20px;"><b>Вид товара:</b> лучший, красивый, неебабельный, самый крутой товар на свете. Покупайте короче.</p>
            <p class="text-start" style="font-size: 20px;"><b>Цвет товара:</b> Красныо-розовый</p>
            <button type="button" class="btn btn-warning">В корзину</button>
          </div>
        </div>
    </div>
    
    <?php
        include ('./elements/footer.php');
    ?>
<script src="/bootstrap/js/bootstrap.js" ></script>    
</body>
</html>