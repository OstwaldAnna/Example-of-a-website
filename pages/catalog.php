<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">
  <title>Каталог</title>
</head>

<body>
  <!-- Вывод меню пользователя -->
  <?php
  include('../elements/header.php');
  ?>

  <div class="container mt-3 text-center">
    <div class="row">
      <div class="col">
        <p class="fw-bold f30">Товары компании</p>
      </div>
    </div>
  </div>

  <!-- Фильтрация -->
  <?php
  $query = "SELECT * FROM `products` WHERE `amount` > 0";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once '../vendor/connect.php';
    if ($_POST["sortBy"] == "price1") {
      $query = "SELECT * FROM `products` ORDER BY `price` ASC";
    } elseif ($_POST["sortBy"] == "price2") {
      $query = "SELECT * FROM `products` ORDER BY `price` DESC";
    } elseif ($_POST["sortBy1"] == "Name1") {
      $query = "SELECT * FROM `products` ORDER BY `name` ASC";
    } elseif ($_POST["sortBy1"] == "Name2") {
      $query = "SELECT * FROM `products` ORDER BY `name` DESC";
    }
    if (isset($_POST["sortBy3"]) && $_POST["sortBy3"] != "none") {
      $category = $_POST['sortBy3'];
      $query = "SELECT * FROM `products` WHERE `category`='$category'";
    } 
  }
  ?>
  <!-- Фильтрация -->

  <!-- Начало фильтрации -->
  <div class="container mt-5">
    <div class="row">
      <div class="col">
        <form method="post">
          <select name="sortBy" class="form-select" aria-label="Default select example">
            <option selected>Сортировать по цене:</option>
            <option value="price1">Дешевле</option>
            <option value="price2">Дороже</option>
          </select>
          <div class="container text-center">
            <button class="btn btn-dark mt-3 mb-3">Применить</button>
          </div>
        </form>
      </div>
      <div class="col">
        <form method="post">
          <select name="sortBy1" class="form-select" aria-label="Default select example">
            <option selected>Сортировать алфавиту:</option>
            <option value="Name1">Алфавиту от А-Я</option>
            <option value="Name2">Алфавиту от Я-А</option>
          </select>
          <div class="container text-center">
            <button class="btn btn-dark mt-3 mb-3">Применить</button>
          </div>
        </form>
      </div>
      <div class="col">
        <form method="post">
          <select name="sortBy3" class="form-select" aria-label="Default select example">
            <?php
              require_once '../vendor/connect.php';?>

              <option value="none" selected>Отфильтровать по категории:</option>

              <?php $db = new Database();
              $result = $db->query("SELECT * FROM `categorys`");
              
              while ($row = mysqli_fetch_assoc($result)):?>
                  <option value="<?php echo $row['name']?>"><?php echo $row['name']?></option>
            <?php endwhile;?>
          </select>
          <div class="container text-center">
            <button class="btn btn-dark mt-3 mb-3">Применить</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Конец фильтрации -->
  </div>
  </div>
  </div>

  <!-- Начало меню товаров -->
  <div class="container mt-5 text-center">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
      <?php
      require_once '../vendor/render_element.php';

      $render_class = new RenderElement();
      $render_class->renderCatalogItems($query);
      ?>
    </div>
  </div>
  <!-- Конец меню товаров-->

  <!-- Вывод подвала -->
  <?php
  include('../elements/footer.php');
  ?>
  <script src="/bootstrap/js/bootstrap.js"></script>
</body>

</html>