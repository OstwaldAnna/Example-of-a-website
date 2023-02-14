<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php
  include ('./elements/header.php');
?>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Товар</th>
                <th scope="col">Название товара</th>
                <th scope="col">Описание</th>
                <th scope="col">Цена</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><img width="100" height="100" alt="logo" src="/resources/image/logo.png"></td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td><img width="100" height="100" alt="logo" src="/resources/image/logo.png"></td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
             </tr>
        </tbody>
    </table>

    <?php
      include ('./elements/footer.php');
    ?>

<script src="/bootstrap/js/bootstrap.js" ></script> 
</body>
</html>