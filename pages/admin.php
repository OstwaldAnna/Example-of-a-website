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
    include('../elements/admin_panel.php')
    ?>
    
    <div class="container mt-5">
    <?php
        session_start();    
        $login = $_SESSION['user']['login'];
        $query = "SELECT * FROM `user` WHERE `login` = '$login'";?>
            <div class="card">
                <div class="card-header">
                    Профиль
                </div>
                <div class="card-body">
                    <p class="card-text">Фамилия: <?php echo $row['surname'] ?></p>
                    <p class="card-text">Имя: <?php echo $row['name'] ?></p>
                    <p class="card-text">Отчество: <?php echo $row['patronymic'] ?></p>
                    <p class="card-text">Логин: <?php echo $row['login'] ?></p>
                    <p class="card-text">Почта: <?php echo $row['email'] ?></p>
                </div>
            </div>
    </div>

<?php
else:
    header('Location: ../index.php');
endif;?>
<?php
    include ('../elements/footer.php');
    ?>
<script src="/bootstrap/js/bootstrap.js"></script>    
</body>
</html>