<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
<!-- Вывод меню пользователя -->
    <?php
        include('../elements/header.php');
    ?>
    <div class="container mt-5">
    <?php
        require_once '../vendor/render_element.php';

        $render_class = new RenderElement();
        $render_class->renderProfileInfo();
    ?>
    </div>
    <!-- Вывод подвала -->
    <?php
        include('../elements/footer.php');
    ?>

    <script src="boostrap/js/bootstrap.js"></script>
</body>
</html>