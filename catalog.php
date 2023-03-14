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
    <title>Каталог товаров</title>
</head>
<body>
<?php
  include ('./elements/header.php');
  $query = "SELECT * FROM `products`";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require_once 'vendor/connect.php';
            if ($_POST["sortBy"] == "price1") {
                $query = "SELECT * FROM `products` ORDER BY `price` ASC";

           
            } elseif ($_POST["sortBy"] == "price2") {
                $query = "SELECT * FROM `products` ORDER BY `price` DESC";

                
            }elseif ($_POST["sortBy"] == "Name1") {
                $query = "SELECT * FROM `products` ORDER BY `name` ASC";


            }elseif ($_POST["sortBy"] == "Name2") {
              $query = "SELECT * FROM `products` ORDER BY `name` DESC";
          }
            

            
        }
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
        <!-- Начало фильтрации -->
        <div class="container mt-5">
                <div class="row">
                    <!-- <div class="col">
                        <select class="form-select" aria-label="Default select example">
                        <option selected>Год производства</option>
                        <option value="1">2000</option>
                        <option value="2">2010</option>
                        <option value="3">2020</option>
                        </select>
                    </div>
                    <div class="col">
                        <select class="form-select" aria-label="Default select example">
                        <option selected>Наименование</option>
                        <option value="1">От А до Я</option>
                        <option value="2">От Я до А</option>
                        </select>
                    </div> -->
                    <div class="col">
                        <form method="post">
                            <select name="sortBy" class="form-select" aria-label="Default select example">
                            <option selected>Сортировать по цене:</option>
                            <option value="price1">Дешевле</option>
                            <option value="price2">Дороже</option>
                            <option value="Name1">Алфавиту от А-Я</option>
                            <option value="Name2">Алфавиту от Я-А</option>
                            </select>
                            <button>Применить</button>
                        </form>
                    </div>
                    <!-- <div class="col">
                        <select class="form-select" aria-label="Default select example">
                        <option selected>Категории</option>
                        <option value="1">Струнные</option>
                        <option value="2">Клавишные смычковые</option>
                        <option value="3">Прочее</option>
                        </select>
                    </div> -->
                </div>
            </div>
                <!-- Конец фильтрации -->
          </div>
        </div>
      </div>

<!-- Начало каталога -->
    <div class="container mt-5 text-center">
        <div class="row row-cols-3">
        <?php
            $_GET['query'] = $query;
            include ('./vendor/get_products.php');
        ?>  
        </div>
    </div>
<!-- Конец каталога -->

<?php
  include ('./elements/footer.php');
  ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="/bootstrap/js/bootstrap.js" ></script>        
</body>
</html>