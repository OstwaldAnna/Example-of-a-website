<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    error_reporting(E_ERROR | E_PARSE);

    $connect = mysqli_connect('127.0.0.1', 'root','', 'Flowers');

    if (!$connect){
        die('Error connect to DataBase');
    }
?>