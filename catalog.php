<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <title>Каталог товаров</title>
</head>
<body>
<?php
  include ('./elements/header.php');
  ?>
     
      <div class="container mt-5 text-center">
        <div class="row">
          <div class="col">
            <p class="fw-bold" style="font-size: 50px;">Каталог товаров</p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p style="font-size: 20px;">На данной странице представлены товары компании</p>
          </div>
        </div>
        <div class="row">
            <div class="col">
                <p style="font-size: 20px;">Упорядочить по:</p>
                <!-- Начало выпадающего меню -->
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Кнопка
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Действие</a></li>
                        <li><a class="dropdown-item" href="#">Другое действие</a></li>
                        <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
                    </ul>
                </div>
                <!-- Конец выпадающего меню -->
            </div>
          </div>
          <div class="col">
            <p style="font-size: 20px;">Категории товара:</p>
                <!-- Начало выпадающего меню -->
                <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Кнопка
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Действие</a></li>
                            <li><a class="dropdown-item" href="#">Другое действие</a></li>
                            <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
                        </ul>
                </div>
                <!-- Конец выпадающего меню -->
          </div>
        </div>
      </div>

    <!-- Начало каталога -->
    <div class="container mt-5 text-center">
        <div class="row">
            <?php 
                $result = mysqli_query($connect, "SELECT * FROM Product WHERE Count > 0");
                while($row = mysqli_fetch_assoc($result)):?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="/resources/image/1.jpg" class="d-block w-100" alt="...">
                            <div class="card-body">
                                <p class="text-start" class="card-text"><?php $row['Name'] ?></p>
                                <p class="text-start" class="card-text"><?php $row['Price']?> руб.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn">
                                        <a href="product_card.php" class="btn btn-sm btn-outline-secondary">Подробнее</a>
                                        <button type="button" class="btn btn-sm btn-warning">В корзину</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile;?>
        </div>
    </div>
    <!-- Конец каталога -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="/bootstrap/js/bootstrap.js" ></script>        
</body>
</html>