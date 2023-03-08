<!--Выход из системы-->
<?php 
session_start();
unset($_SESSION['user']);
unset($_SESSION['cart']);
unset($_SESSION['message']);
header("Location: http://".$_SERVER["SERVER_NAME"]."./index.php");
?>