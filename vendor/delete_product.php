<!-- Удаление товара -->
<?php
    require_once '../vendor/connect.php';
    
    $id = $_GET['id'];

    $db = new Database();
    $db->query("DELETE FROM `products` WHERE `id` = '$id'");

    header('Location: ../pages/products_management.php');
?>