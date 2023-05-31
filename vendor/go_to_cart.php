<?php 

//Добавление товара в корзину
if(isset($_GET['id'])){
    session_start();
    if(isset($_SESSION['cart'])){
        $oldarr = $_SESSION['cart'];
        $newarr = array(
                "id" => $_GET['id'],
                "quantity" => 1
            );
        array_push($oldarr, $newarr);
        $_SESSION['cart'] = $oldarr;
    }
    else {
        $id = $_GET['id'];
        $array = array(
            0 => array(
                "id" => $id,
                "quantity" => 1
            )
        );
        $_SESSION['cart'] = $array;
    }
    header('Location: ../pages/basket.php');
}
