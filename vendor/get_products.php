<?php 
    $result = mysqli_query($connect, "SELECT * FROM products");
    while($row = mysqli_fetch_assoc($result)):?>
        <div class="col">
            <div class="card mb-4">
                <img src="/resources/image/<?php echo $row['image']?>" class="d-block w-100" alt="..." height="300" >
                <div class="card-body">
                    <p class="text-start" class="card-text"><?php echo $row['name']?></p>
                    <p class="text-start" class="card-text"><?php echo $row['about']?></p>
                    <p class="text-start" class="card-text"><?php echo $row['price']?> руб.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn">
                            <a href="product_card.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-outline-secondary">Подробнее</a>
                            <a href="./vendor/go_to_cart.php?id=<?php echo $row['id']?>" class="btn btn-warning">В корзину</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile;?>