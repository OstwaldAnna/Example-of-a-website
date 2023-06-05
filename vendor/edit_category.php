<!-- Редактирование категории -->
<?php
    require_once '../vendor/connect.php';
    
    $id = $_GET['id'];
    $name = $_POST['name'];

    $db = new Database();
    $db->query("UPDATE `categorys` SET `name` = '$name'
    WHERE `categorys`.`id` = '$id'");

    header('Location: ../pages/category_management.php');
?>