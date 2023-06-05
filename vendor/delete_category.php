<!-- Удаление категории -->
<?php
    require_once '../vendor/connect.php';
    
    $id = $_GET['id'];

    $db = new Database();
    $db->query("DELETE FROM `categorys` WHERE `id` = '$id'");

    header('Location: ../pages/category_management.php');
?>