<?php       
    session_start();
    require_once 'connect.php';

    $name = $_POST['name'];

    $db = new Database();
    $check_category = $db->query("SELECT * FROM `categorys` WHERE `name` = '$name'");
    if (mysqli_num_rows($check_category) == 0){
        $db->query("INSERT INTO `categorys` 
        (`id`, `name`) 
        VALUES (NULL, '$name')");
        $_SESSION['message'] = "Категория добавлена";
        header('Location: ../pages/add_category.php'); 
    } else {
        $_SESSION['message'] = "Такая категория уже существует";
        header('Location: ../pages/add_category.php'); 
    }
?>