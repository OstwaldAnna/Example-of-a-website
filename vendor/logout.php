<!--Выход из системы-->
<?php 
session_start();
unset($_SESSION['user']);
header("Location: http://".$_SERVER["SERVER_NAME"]."./index.php");
?>