<!-- Обновление количества товаров в корзине -->
<?php
    $counter = 0;
    session_start();
    foreach($_POST as $key => $value) {
        $_SESSION['cart'][$counter]['quantity'] = $value;
        $counter++;
    }

    header('Location: ../pages/ready_order.php'); 
?>