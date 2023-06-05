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

    <?php
        require_once '../vendor/connect.php';

        $id = $_GET['id'];

        $db = new Database();
        $result = $db->query("SELECT * FROM `categorys` WHERE `id` = '$id'");
        $product = mysqli_fetch_assoc($result);
    ?>

    <main class="container mt-5 pad" >
        <form method="post" action="../vendor/edit_category.php?id=<?php echo $id?>">
            <h1 class="h3 mb-3 fw-normal">Добавить категорию</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $product['name']?>">
                <label for="floatingInput">Название</label>
            </div>

            <button class="w-100 btn btn-outline-dark mt-3" >Добавить категорию</button>
            <?php
                if ($_SESSION['message']) {
                    echo '<p class="msg mt-3">' . $_SESSION['message'] . '</p>';
                }
                unset($_SESSION['message']);
                ?>
        </form>
    </main>

<!-- Вывод подвала -->
    <?
        include ('../elements/footer.php');
    ?>

    <script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>
<?endif;?>