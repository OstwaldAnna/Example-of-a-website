<?php 

//Добавление товара в корзину
if(isset($_GET['id'])){
    session_start();
    if(isset($_SESSION['cart'])){
        $oldarr = $_SESSION['cart'];
        $newarr = array(
                "id" => $_GET['id'] 
            );
        array_push($oldarr, $newarr);
        $_SESSION['cart'] = $oldarr;
    }
    else {
        $id = $_GET['id'];
        $array = array(
            1 => array(
                "id" => $id,
            )
        );
        $_SESSION['cart'] = $array;
    }
    header('Location: ../pages/basket.php');
}
