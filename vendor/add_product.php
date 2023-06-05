<!-- Добавление товара -->
<?php       
    session_start();
    require_once 'connect.php';

    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $country = $_POST['country'];
    $year = $_POST['year'];
    $amount = $_POST['amount'];
    $photo = $_POST['photo'];

    $db = new Database();
    $db->query("INSERT INTO `products` 
    (`id`, `name`, `price`, `description`, `category`, `country`, `year`, `amount`, `image`) 
    VALUES (NULL, '$name', '$price', '$description', '$category', '$country', '$year', '$amount','$photo')");
    $_SESSION['message'] = "Товар добавлен";
    header('Location: ../pages/add_product.php'); 
?>