<!-- Отмена заказа -->
<?php
    require_once 'connect.php';
    $id = $_GET['id'];
    $comment = $_POST['comment'];
    $db = new Database();
    // удаляем заказ из бд
    $result = $db->query("UPDATE `orders` SET `status` = 'Отменен', `comment` = '$comment' WHERE `orders`.`id` = '$id';");
    header('Location: ../pages/all_orders.php');
?>