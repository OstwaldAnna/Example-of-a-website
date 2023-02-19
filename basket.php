<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <title>Корзина</title>
</head>
<body>
<?php
  include ('./elements/header.php');
?>

    <div class="mt-5 text-start" style=" margin-left: 3rem">
        <div class="row">
          <div class="col">
            <p class="fw-bold" style="font-size: 50px;">Корзина</p>
          </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="same-address">
                    <label class="form-check-label" for="same-address">Выбрать все</label>
                    <a href="..." style="margin-left: 1rem;">Удалить выбранное</a>
                </div>
            </div>
        </div>
    </div>
    
    <table class="table mt-5">
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
                <th scope="row">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="same-address">
                        <label class="form-check-label" for="same-address">1</label>
                    </div>
                </th>
                
                <td><img width="100" height="100" alt="logo" src="/resources/image/logo.png"></td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="same-address">
                        <label class="form-check-label" for="same-address">2</label>
                    </div>
                </th>
                <td>
                    <img width="100" height="100" alt="logo" src="/resources/image/logo.png">
                </td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="same-address">
                        <label class="form-check-label" for="same-address">3</label>
                    </div>
                </th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
                <td>@mdo</td>
             </tr>
             <tr>
                <th scope="row">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="same-address">
                        <label class="form-check-label" for="same-address">4</label>
                    </div>
                </th>
                <td>
                    <img width="100" height="100" alt="logo" src="/resources/image/logo.png">
                </td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@mdo</td>
            </tr>
            <thead>
                <tr class="fw-bold" style="font-size: 20px;">
                    <th scope="row"></th>
                    <td colspan="2"></td>
                    <td>Итоговая цена:</td>
                    <td>Цена</td>
                </tr>
             </thead>
        </tbody>
    </table>


    <?php
      include ('./elements/footer.php');
    ?>

<script src="/bootstrap/js/bootstrap.js" ></script> 
</body>
</html>