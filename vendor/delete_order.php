<?php
    require_once 'connect.php';
    $id = $_GET['id'];
    $db = new Database();
    // удаляем заказ из бд
    $result = $db->query("DELETE FROM `orders` WHERE `id` = '$id'");
    header('Location: ../pages/my_orders.php');
?>