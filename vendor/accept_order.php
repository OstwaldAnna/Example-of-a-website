<?php
    require_once '../vendor/connect.php';
    
    $id = $_GET['id'];

    $db = new Database();
    $db->query("UPDATE `orders` SET `status` = 'Подвержден' WHERE `orders`.`id` = '$id'");

    header('Location: ../pages/all_orders.php');
?>