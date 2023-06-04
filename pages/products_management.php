<?session_start(); if($_SESSION['user']['login'] == "admin"):?>
<!DOCTYPE html>
</html>
<head>
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
    <!--
        Шапка сайта
    -->
    <?
        include('../elements/admin_panel.php');
    ?>

    <div class="container mt-3 text-center">
        <div class="row">
            <div class="col">
                <p class="fw-bold f50">Управление товарами</p>
                <p class="fw-bold f30 mt-3">Добавление товаров</p>
                <a href="../pages/add_product.php" class="btn btn-outline-secondary">Добавить товар</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="fw-bold f30 mt-3">Все товары</p>
            </div>
        </div>
        <table class="container table">
            <thead>
                <tr>
                    <th scope="col">Фото</th>
                    <th scope="col">Название товара</th>
                    <th scope="col">Цена</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                
                <?php 
                    require_once '../vendor/render_element.php';

                    $render_class = new RenderElement();
                    $render_class->renderAllOrdersItems();
                ?>

            </tbody>
        </table>
    </div>

    <!--
        Подвал сайта
    -->
    <?
        include ('../elements/footer.php');
    ?>

    <script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>
<?endif;?>