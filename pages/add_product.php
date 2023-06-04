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

    <main class="container mt-5 pad" >
        <form method="post" action="../vendor/add_product.php">
            <h1 class="h3 mb-3 fw-normal">Добавить товар</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="name" name="name" placeholder="name@example.com">
                <label for="floatingInput">Название</label>
            </div>
            <div class="form-floating mt-3">
                <input type="number" class="form-control" id="price" name="price" placeholder="name@example.com">
                <label for="floatingInput">Цена</label>
            </div>
            <div class="form-floating mt-3">
                <input type="text" class="form-control" id="description" name="description" placeholder="name@example.com">
                <label for="floatingInput">Описание</label>
            </div>
            <div class="form-floating mt-3">
                <select name="category" class="form-select" aria-label="Default select example">
                    <?php
                        require_once '../vendor/connect.php';

                        $db = new Database();
                        $result = $db->query("SELECT * FROM `categorys`");
                        
                        while ($row = mysqli_fetch_assoc($result)):?>
                            <option value="<?php echo $row['name']?>"><?php echo $row['name']?></option>
                        <?php endwhile;?>
                </select>
            </div>
            <div class="form-floating mt-3">
                <input type="text" class="form-control" id="country" name="country" placeholder="name@example.com">
                <label for="floatingInput">Страна</label>
            </div>
            <div class="form-floating mt-3">
                <input type="number" class="form-control" id="year" name="year" placeholder="Password">
                <label for="floatingPassword">Год производства</label>
            </div>
            <div class="form-floating mt-3">
                <input type="text" class="form-control" id="photo" name="photo" placeholder="Password">
                <label for="floatingPassword">Фото (путь : 3.jpeg)</label>
            </div>
            <button class="w-100 btn btn-outline-dark mt-3" >Добавить товар</button>
            <?php
                if ($_SESSION['message']) {
                    echo '<p class="msg mt-3">' . $_SESSION['message'] . '</p>';
                }
                unset($_SESSION['message']);
                ?>
        </form>
    </main>

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