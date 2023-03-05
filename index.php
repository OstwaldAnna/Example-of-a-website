<?php
require_once('vendor/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <title>О нас</title>
</head>
<body>

  <?php
  include ('./elements/header.php');
  ?>
     
      <div class="container mt-5 text-center">
        <div class="row">
          <div class="col">
            <img width="100" height="100" alt="logo" src="/resources/image/logo.png">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p class="fw-bold" style="font-size: 30px;">DefaultShop</p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p style="font-size: 20px;">Здесь будет девиз компании ы по типу: наш девиз 4 слова - чтоб горела наша школа  </p>
          </div>
        </div>
      </div>

      <div class="container mt-5 text-center">
        <div class="row">
          <div class="col">
            <p class="fw-bold" style="font-size: 30px;">Новинки компании</p>
          </div>
        </div>
      </div>

      <!-- Начало карусели -->
      <div class="container mt-3 text-center">
        <div id="carouselExampleCaptions" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
          </div>
            <div class="carousel-inner">
            <?php
      $count = 0;
        $product = mysqli_query($connect, "SELECT * FROM products ORDER BY id DESC LIMIT 5");
        while ($row = mysqli_fetch_assoc($product)):
            if($count == 0):?>
                <div class="carousel-item active" data-bs-interval="1000">
                <a href="product_card.php?id=<?php echo $row['id']?>"><img width="200" height="400" src="resources/image/<?php echo $row['image']?>" class="d-block w-100" alt="..."></a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php echo $row['name'] ?></h5>
                        <p><?php echo $row['about'] ?></p>
                    </div>
                </div>
            <?php endif;?>
            <?if($count > 0):?>
                <div class="carousel-item" data-bs-interval="1000">
                    <a href="product_card.php?id=<?php echo $row['id']?>"><img width="200" height="400" src="resources/image/<?php echo $row['image']?>" class="d-block w-100" alt="..."></a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php echo $row['name']?></h5>
                        <p><?php echo $row['about'] ?></p>
                    </div>
                </div>
            <?php endif;?>
        <?php $count++;  endwhile;?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Следующий</span>
            </button>
        </div>
      </div>
      
      <!-- Конец карусели -->
      <?php
        include ('./elements/footer.php');
      ?>
      

<script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>
`