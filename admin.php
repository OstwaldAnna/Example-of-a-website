<!-- Страница админа -->
<?php
session_start(); if($_SESSION['user']['login'] == "admin"):
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <title>Админ панель</title>
</head>
<body>
    
    <?php
        header('Location: ../pages/products_management.php'); 
    ?>    

<script src="/bootstrap/js/bootstrap.js"></script>    
</body>
</html>
<?php
else:
    header('Location: ../index.php');
endif;?>