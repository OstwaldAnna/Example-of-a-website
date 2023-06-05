<!-- Проверка на уникальность логина -->
<?php 
    require_once 'connect.php';
    
    $login = $_GET['login'];

    $db = new Database();
    $result = $db->query("SELECT * FROM `user` WHERE `login` = '$login'");
    if (mysqli_num_rows($result) === 0){
        echo json_encode(array('dark' => true));
    }
    else{
        echo json_encode(array('dark' => false));
    }

?>