<?php
    session_start();

    if(isset($_SESSION['user'])){
        header('Location: ../basket.php'); 
    }else{
        header('Location: ../login.php');
    }
?>