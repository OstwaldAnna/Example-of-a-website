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
        $result = $db->query("SELECT * FROM `products` WHERE `id` = '$id'");
        $product = mysqli_fetch_assoc($result);
    ?>

    <main class="container mt-5 pad" >
        <form method="post" action="../vendor/edit_product.php?id=<?php echo $id?>">
            <h1 class="h3 mb-3 fw-normal">Добавить товар</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $product['name']?>">
                <label for="floatingInput">Название</label>
            </div>
            <div class="form-floating mt-3">
                <input type="number" class="form-control" id="price" name="price" value="<?php echo $product['price']?>">
                <label for="floatingInput">Цена</label>
            </div>
            <div class="form-floating mt-3">
                <input type="text" class="form-control" id="description" name="description" value="<?php echo $product['description']?>">
                <label for="floatingInput">Описание</label>
            </div>
            <div class="form-floating mt-3">
                <select name="category" class="form-select" aria-label="Default select example">
                    <?php
                        require_once '../vendor/connect.php';

                        $db = new Database();
                        $result = $db->query("SELECT * FROM `categorys`");
                        
                        $count = 0;
                        while ($row = mysqli_fetch_assoc($result)):?>
                            <?php if($count == 0):?>
                                <option value="<?php echo $product['category']?>"><?php echo $product['category']?></option>
                            <?php $count++; endif;?>
                            <?php if($product['category'] != $row['name']):?>
                            <option value="<?php echo $row['name']?>"><?php echo $row['name']?></option>  
                            <?php endif;?> 
                        <?php endwhile;?>
                </select>
            </div>
            <div class="form-floating mt-3">
                <input type="text" class="form-control" id="country" name="country" value="<?php echo $product['country']?>">
                <label for="floatingInput">Страна</label>
            </div>
            <div class="form-floating mt-3">
                <input type="number" class="form-control" id="year" name="year" value="<?php echo $product['year']?>">
                <label for="floatingPassword">Год производства</label>
            </div>
            <div class="form-floating mt-3">
                <input type="text" class="form-control" id="photo" name="photo" value="<?php echo $product['image']?>">
                <label for="floatingPassword">Фото (путь : 3.jpeg)</label>
            </div>
            <button class="w-100 btn btn-outline-dark mt-3" >Изменить товар</button>
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