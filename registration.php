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
    
    <div class="container mt-5 text-center">
        <div class="row">
          <div class="col">
            <p class="fw-bold" style="font-size: 50px;">Регистрация</p>
          </div>
        </div>
    </div> 


    <!-- Форма регистрации -->
        <div class="container mt-3 text-center">
            <form class="needs-validation" novalidate="" >
                <div class="row g-3">
                    <div class="col-sm-3">
                        <label for="firstName" class="form-label">Имя *</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Имя" value="" required="">
                    </div>
                    <div class="col-sm-3">
                        <label for="lastName" class="form-label">Фамилия *</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                    </div>
            <form class="needs-validation" novalidate="">
                <div class="row g-3">
                    <div class="col-sm-3">
                        <label for="firstName" class="form-label">Отчество</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required=""> 
                    </div>
                <div class="col-sm-3">
                    <label for="lastName" class="form-label">Логин *</label>
                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                </div>
                <div class="col-8">
                    <label for="email" class="form-label">Email *</label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                </div>
            <form class="needs-validation" novalidate="">
                <div class="row g-3">
                    <div class="col-sm-3">
                        <label for="firstName" class="form-label">Пароль *</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                    </div>
                <div class="col-sm-3">
                    <label for="lastName" class="form-label">Повторите пароль *</label>
                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                </div>
                <div class="row g-3">
                    <div class="col-sm-5">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="same-address">
                            <label class="form-check-label" for="same-address">Я согласен с условиями пользовательского соглашения</label>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit">Зарегистрироваться</button>
            </form>
        </div>
    <!-- Форма регистрации -->

      

    <?php
        include ('./elements/footer.php');
    ?>

<script src="/bootstrap/js/bootstrap.js" ></script> 
</body>
</html>