<?php
session_start(); if($_SESSION['user']['login'] == "admin"):
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <title>Управление</title>
</head>

<body>
    <?php
    include('../elements/admin_panel.php');
    ?>

    <div class="container mt-3 text-center">
        <div class="row">
            <div class="col">
                <p class="fw-bold f30">Добавить или удалить товар</p>
                <form method="post" action="#">
                    <div class="row g-3">
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="products" placeholder="Товар" value="" required="">
                        </div>

                        <div class="col">
                            <form method="post">
                                <select name="..." class="form-select" aria-label="Default select example">
                                    <option selected>Категория</option>
                                    <option value="category1">Струнные</option>
                                    <option value="category2">Клавишные</option>
                                    <option value="category3">Смычковые</option>
                                </select>
                            </form>
                        </div>

                    </div>
                    <button class="w-20 btn btn-danger mt-3" type="submit">Удалить</button>
                    <button class="w-20 btn btn-outline-secondary mt-3" type="submit">Добавить</button>
                </form>
            </div>
            <div class="row">
                <div class="col mt-3">
                    <p class="fw-bold f30">Добавить или удалить категорию</p>
                    <form method="post" action="#">
                        <div class="row g-3">
                            <div class="col">
                                <form method="post">
                                    <select name="..." class="form-select" aria-label="Default select example">
                                        <option selected>Добавить или удалить категорию:</option>
                                        <option value="category1">Струнные</option>
                                        <option value="category2">Клавишные</option>
                                        <option value="category3">Смычковые</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <button class="w-20 btn btn-danger mt-3" type="submit">Удалить</button>
                        <button class="w-20 btn btn-outline-secondary mt-3" type="submit">Добавить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <?php
    include('../elements/footer.php');
    ?>

    <script src="/bootstrap/js/bootstrap.js"></script>
</body>

</html>
<?php
else:
    header('Location: ../index.php');
endif;?>