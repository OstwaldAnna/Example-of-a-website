<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <title>Карточка товара</title>
</head>
<body>
    <!-- Вывод меню пользователя -->
    <?php
        include ('../elements/header.php');
    ?>

    <?php
        require_once '../vendor/render_element.php';

        $render_class = new RenderElement();
        $render_class->renderProductCard($_GET['id']);
    ?> 

<!-- Вывод подвала -->
    <?php
        include ('../elements/footer.php');
    ?>
<script src="/bootstrap/js/bootstrap.js" ></script>    
</body>
</html>