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
        <form method="post" action="../vendor/cancel_order.php?id=<?php $id = $_GET['id']; echo $id;?>">
            <h1 class="h3 mb-3 fw-normal">Отменить заказ</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="comment" name="comment">
                <label for="floatingInput">Причина отказа</label>
            </div>

            <button class="w-100 btn btn-outline-dark mt-3" >Отменить заказ</button>
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