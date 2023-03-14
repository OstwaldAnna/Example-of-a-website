<?php
  session_start();
  require_once 'vendor/connect.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet">
</head>

<body>

    <?php
        include('./elements/header.php');
    ?>
    <div class="container mt-5">
    <?php
        session_start();    
        $login = $_SESSION['user']['login'];
        $query = "SELECT * FROM `user` WHERE `login` = '$login'";
        $result = $connect->query($query);
        $row = $result->fetch_assoc();?>
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
        include('./elements/footer.php');
        ?>

    <script src="boostrap/js/bootstrap.js"></script>
</body>

</html>