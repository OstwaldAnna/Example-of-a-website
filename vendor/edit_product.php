<!-- Изменение товара, редактирование -->
<?php
    require_once '../vendor/connect.php';
    
    $id = $_GET['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $country = $_POST['country'];
    $year = $_POST['year'];
    $photo = $_POST['photo'];

    $db = new Database();
    $db->query("UPDATE `products` SET `name` = '$name',
    `price` = '$price',
    `description` = '$description',
    `category` = '$category',
    `country` = '$country',
    `year` = '$year',
    `image` = '$photo'
    WHERE `products`.`id` = '$id'");

    header('Location: ../pages/products_management.php');
?>