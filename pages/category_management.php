<?session_start(); if($_SESSION['user']['login'] == "admin"):?>
<!DOCTYPE html>
</html>
<head>
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
<!-- Вывод меню админа -->
    <?
        include('../elements/admin_panel.php');
    ?>

    <div class="container mt-3 text-center">
        <div class="row">
            <div class="col">
                <p class="fw-bold f50">Управление категориями</p>
                <p class="fw-bold f30 mt-3">Добавление категории</p>
                <a href="../pages/add_category.php" class="btn btn-dark">Добавить категорию</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="fw-bold f30 mt-3">Все категории</p>
            </div>
        </div>
        <table class="container table">
            <thead>
                <tr>
                    <th scope="col">Название категории</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                
                <?php 
                    require_once '../vendor/render_element.php';

                    $render_class = new RenderElement();
                    $render_class->renderAllCategorys();
                ?>

            </tbody>
        </table>
    </div>

<!-- Вывод подвала -->
    <?
        include ('../elements/footer.php');
    ?>

    <script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>
<?endif;?>