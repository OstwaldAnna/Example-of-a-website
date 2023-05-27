<!-- Карточка товара для каталога -->
<?php
require_once '../vendor/connect.php';
$query1 = $_GET['query'];
$result = mysqli_query($connect, $query1);
while ($row = mysqli_fetch_assoc($result)) : ?>
    <div class="col">
        <div class="card mb-4">
            <img style="object-fit: contain" class="border border-dark" src="/resources/images/<?php echo $row['image'] ?>.jpeg" class="d-block w-100" alt="..." height="300">
            <div class="card-body">
                <p class="text-start" class="card-text"><?php echo $row['name'] ?></p>
                <p class="text-start" class="card-text"><?php echo $row['model'] ?></p>
                <p class="text-start" class="card-text"><?php echo $row['price'] ?> руб.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <a href="../product_card.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Подробнее</a>
                        <?php if (isset($_SESSION["user"])) {
                            echo '<a href="/vendor/go_to_cart.php?id=' . $row['id'] . '" class="btn btn-outline-secondary">В корзину</a>';
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>