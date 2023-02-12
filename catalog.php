<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <title>Document</title>
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
            <div class="col">
                <div class="card shadow-sm">
                    <img src="/resources/image/1.jpg" class="d-block w-100" alt="...">
                    <div class="card-body">
                        <p class="text-start" class="card-text">Название товара</p>
                        <p class="text-start" class="card-text">500</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Подробнее</button>
                                <button type="button" class="btn btn-sm btn-warning">В корзину</button>
                                <a href="product_card.php" class="nav-link px-2 text-black">Карточка</a>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                <img src="/resources/image/2.jpg" class="d-block w-100" alt="...">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col">
                <div class="card shadow-sm">
                <img src="/resources/image/3.jpg" class="d-block w-100" alt="...">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Конец каталога -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="/bootstrap/js/bootstrap.js" ></script>        
</body>
</html>