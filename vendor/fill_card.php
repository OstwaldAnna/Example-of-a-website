<?php
require_once './vendor/connect.php';

$id = $_GET['id'];
$query = "SELECT * FROM products WHERE id = '$id'";
$result = $connect->query($query);
$row = $result->fetch_assoc();
?>
<div class="container mt-5 text-center">
  <div class="row">
    <div class="col">
      <img width="800" height="500" alt="map" src="/resources/images/<?php echo  $row['image'] ?>.jpeg">
    </div>
    <div class="col">
      <p class="text-start" style="font-size: 30px;"><b><?php echo $row['name'] ?></b></p>
      <p class="text-start" style="font-size: 20px;"><b>Цена:</b><?php echo $row['price'] ?></p>
      <p class="text-start" style="font-size: 20px;"><b>Страна производитель:</b> <?php echo $row['country'] ?></p>
      <p class="text-start" style="font-size: 20px;"><b>Вид товара:</b> <?php echo $row['about'] ?></p>
      <p class="text-start" style="font-size: 20px;"><b>Цвет товара:</b> <?php echo $row['about'] ?></p>
      <?php if (isset($_SESSION["user"])) {
        echo '<a href="#.php?id=' . $row['id'] . '" class="btn btn-sm btn-primary text-start">В корзину</a>';
      } ?>
    </div>
  </div>
</div>