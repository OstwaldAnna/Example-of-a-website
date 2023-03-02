<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <title>Мои заказы</title>
</head>
<body>
<?php
  include ('./elements/header.php');
?>

    <div class="mt-5 text-start" style=" margin-left: 3rem">
        <div class="row">
          <div class="col">
            <p class="fw-bold" style="font-size: 50px;">Все заказы</p>
            <div class="container mt-5">
                <div class="row">
                    <div class="col">
                        <select class="form-select" aria-label="Default select example">
                        <option selected>Фильтровать по</option>
                        <option value="1">Новые</option>
                        <option value="2">Подтвержданные</option>
                        <option value="3">Отмененные</option>
                        </select>
                    </div>
                </div>
            </div>
          </div>
      </div>
    </div>
    
    <table class="table mt-5">
        <thead>
            <tr>
                <th scope="col">№ заказа</th>
                <th scope="col">Дата заказа</th>
                <th scope="col">Количество товара</th>
                <th scope="col">Цена заказа</th>
                <th scope="col">Статус заказа</th>
                <th scope="col">ФИО заказа</th>
                <th scope="col">Действие</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td></td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td><button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#registration">Управление заказом</button></td>
            </tr>
<!-- Modal -->
<div class="modal fade" id="registration" tabindex="-1" aria-labelledby="registrationLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="registrationLabel">Управление заказом</h5>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
        </div>
        <div class="modal-body">
          <div class="container" style="margin-top: 1rem;">
            <form>
                  <button type="button" class="btn btn-danger">Отменить заказ</button>
                  <button type="Button" class="btn btn-sm btn-success">Подтвердить заказ</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Modal -->
            <tr>
                <th scope="row">2</th>
                <td></td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td><button type="button" class="btn btn-sm btn-success">Управление заказом</button></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td></td>
                <td>@twitter</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td><button type="button" class="btn btn-sm btn-success">Управление заказом</button></td>
             </tr>
             <tr>
                <th scope="row">4</th>
                <td></td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td><button type="button" class="btn btn-sm btn-success">Управление заказом</button></td>
            </tr>
            <thead>
        </tbody>
    </table>


    <?php
      include ('./elements/footer.php');
    ?>

<script src="/bootstrap/js/bootstrap.js" ></script> 
</body>
</html>