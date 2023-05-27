<!-- Карусель -->
<div class="container text-center">
  <div id="carouselExampleDark" class="carousel carousel-dark slide " data-bs-ride="carousel">
    <div class="carousel-indicators " >
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5s"></button>
    </div>
    <div class="carousel-inner">
      <?php
        session_start();
        require_once 'vendor/connect.php';
          $count = 0;
          $product = mysqli_query($connect, "SELECT * FROM products ORDER BY id DESC LIMIT 5");
          while ($row = mysqli_fetch_assoc($product)):
              if($count == 0):?>
                  <div class="carousel-item active" data-bs-interval="1000">
                  <a href="product_card.php?id=<?php echo $row['id']?>"><img  class="border border-dark " src="resources/images/<?php echo $row['image']?>.jpeg"  class="d-block w-100" alt="..."></a>
                    <div class="carousel-caption d-none d-md-block">
                      <h5><?php echo $row['name'] ?></h5>
                      <p><?php echo $row['model'] ?></p>
                    </div>
                  </div>
              <?php endif;?>
              <?if($count > 0):?>
                <div class="carousel-item" data-bs-interval="1000">
                  <a href="product_card.php?id=<?php echo $row['id']?>"><img  class="border border-dark  " src="resources/images/<?php echo $row['image']?>.jpeg"  class="d-block w-100" alt="..."></a>
                    <div class="carousel-caption d-none d-md-block">
                      <h5><?php echo $row['name']?></h5>
                      <p><?php echo $row['model'] ?></p>
                    </div>
                </div>
              <?php endif;?>
        <?php $count++;  endwhile;?>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
          </button>
    </div>
  </div>
  </div>
<!-- Карусель -->