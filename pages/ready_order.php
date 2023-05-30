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
    include('../elements/header.php');
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
    <form action="../vendor/make_order.php" method="post">
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
                    require_once '../vendor/render_element.php';

                    $render_class = new RenderElement();
                    $render_class->renderCartItems();
                    $render_class->renderTotalPrice();
                ?>
            </tbody>
        </table>

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

    <?php
    include('../elements/footer.php');
    ?>

    <script src="/bootstrap/js/bootstrap.js"></script>
</body>

</html>