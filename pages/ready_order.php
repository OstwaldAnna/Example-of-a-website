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
    <!-- Вывод меню пользователя -->
    <?php
    include('../elements/header.php');
    ?>

    <div class="container mt-5 text-start">
        <div class="row">
            <div class="col">
                <p class="fw-bold f50">Подтвердите заказ</p>
            </div>
        </div>
    </div>
    
    <form action="../vendor/make_order.php" method="post" class="container">
        <!-- Таблица подтверждения заказа -->
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
        <!-- Подтверждение пароля -->
        <div class="container pad">
            <div class="row">
                <div class="col">
                    <h3 class="h5 mb-3 fw-normal">Подвердите пароль</h1>
                    <div class="form-floating mt-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <label for="floatingPassword">Пароль</label>
                    </div>
                    <button class="btn btn-outline-dark me-2 mt-3">Оформить заказ</button>
                    <?php
                        if (isset($_SESSION['message'])){
                            echo '<p class="msg mt-3">' . $_SESSION['message'] . '</p>';
                        }
                        unset($_SESSION['message']);
                    ?>
                </div>
            </div>
        </div>
    </form>

    <!-- Вывод подвала -->
    <?php
    include('../elements/footer.php');
    ?>

    <script src="/bootstrap/js/bootstrap.js"></script>
</body>

</html>