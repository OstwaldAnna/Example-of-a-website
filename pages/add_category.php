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
        <form method="post" action="../vendor/add_category.php">
            <h1 class="h3 mb-3 fw-normal">Добавить категорию</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="name" name="name" placeholder="name@example.com">
                <label for="floatingInput">Название</label>
            </div>

            <button class="w-100 btn btn-dark mt-3" >Добавить категорию</button>
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