<?php
session_start();
if ($_SESSION['user']['login'] == "admin") :
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <title>Все заказы</title>
</head>

<body>
    <?php
    include('../elements/admin_panel.php');
    ?>

    <?php
      $query = "SELECT * FROM `orders`";
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["sortBy"] == "new") {
          $query = "SELECT * FROM `orders` WHERE `status` = 'Новый'";
        } elseif ($_POST["sortBy"] == "cancel") {
          $query = "SELECT * FROM `orders` WHERE `status` = 'Отменен'";
        } elseif ($_POST["sortBy"] == "accept") {
          $query = "SELECT * FROM `orders` WHERE `status` = 'Подвержден'";
        } elseif ($_POST["sortBy"] == "none") {
          $query = "SELECT * FROM `orders`";
        }
      }
      ?>

    <div class="container mt-5 text-start">
        <div class="row">
            <div class="col">
                <p class="fw-bold f50">Все заказы</p>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col">
                        <form method="post">
                          <select name="sortBy" class="form-select" aria-label="Default select example">
                            <option value="none" selected>Отфильтровать по статусу:</option>
                            <option value="new">Новые</option>
                            <option value="accept">Подтвержденные</option> 
                            <option value="cancel">Отменные</option>  
                          </select>
                          <div class="container text-center">
                            <button class="btn btn-dark mt-3">Применить</button>
                          </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <table class="container table mt-5">
        <thead>
            <tr>
                <th scope="col">ID заказа</th>
                <th scope="col">Дата заказа</th>
                <th scope="col">ФИО заказчика</th>
                <th scope="col">Количество</th>
                <th scope="col">Статус заказа</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php 
                    require_once '../vendor/render_element.php';

                    $render_class = new RenderElement();
                    $render_class->renderAllOrders($query);
                ?>
            </tr>
        </tbody>
    </table>


    <?php
    include('../elements/footer.php');
    ?>

    <script src="/bootstrap/js/bootstrap.js"></script>
</body>

</html>
<?php
else :
  header('Location: ../index.php');
endif; ?>