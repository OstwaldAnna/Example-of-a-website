<?php
    session_start();
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
    <title>Мои заказы</title>
</head>
<body>
<?php
  include ('./elements/header.php');
  $order = "SELECT * FROM `orders`";
?>

<div class="mt-5 text-center" style=" margin-left: 3rem">
        <div class="row">
          <div class="col">
            <p class="fw-bold" style="font-size: 50px;">Мои заказы</p>
          </div>
        </div>
    </div>
    <!-- Начало вывода списка заказов -->
    <div class="container">
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Количество</th>
                    <th scope="col">Названия</th>
                    <th scope="col">Статус</th>
                    <th scope="col">Комментарий</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            <?php
    
                if(isset($_SESSION['user'])):
                    $id = $_SESSION['user']['id'];
                    $product = mysqli_query($connect, "SELECT * FROM orders WHERE `id_user` = $id");
                    while ($row = mysqli_fetch_assoc($products)):
                        $order = $row;
                        $array = [];
                        $products = explode(";", $row['products_info']);
                        foreach ($product as $key => $id) {
                            $product_name = mysqli_query($connect, "SELECT * FROM products WHERE id = '$id'");
                            while ($row = mysqli_fetch_assoc($product_name)){
                                array_push($array,$row['name']);
                            }
                        }?>
                        <tr>
                            <th scope="row"></th>
                            <td><?php echo count($products)?></td>
                            <td><?php echo implode(", ",$array)?></td>
                            <td><?php echo $order['status']?></td>
                            <td><?php echo $order['comment']?></td>
                            <td><a class="btn btn-danger" href="#?id=<?php echo $order['id']?>">Удалить заказ</a></td>
                        </tr>
                    <?php endwhile; endif; ?>
            </tbody>
        </table>
        <!-- Конец вывода списка заказов -->
    </div>

    <?php
      include ('./elements/footer.php');
    ?>

<script src="/bootstrap/js/bootstrap.js" ></script> 
</body>
</html>