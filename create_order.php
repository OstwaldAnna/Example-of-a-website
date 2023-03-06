<?php
    session_start();
    require_once 'vendor/connect.php';

    if(isset($_SESSION['cart'])){
        $cart = $_SESSION['cart'];
        $array = [];

        foreach ($cart as $value) {
            array_push($array, $value['id']);
        }
        
        $arrayProduct = implode(";",$array);

        mysqli_query($connect, "INSERT INTO `orders` (`id`, `id_products`) VALUES (NULL, '$arrayProduct')");

        unset($_SESSION["cart"]);

        header('Location: myorders.php');
    }
  ?>
