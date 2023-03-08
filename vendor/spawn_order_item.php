<?php
    session_start();     
    require_once 'connect.php';

    $user_id = $_SESSION['user']['id'];
    $orders = mysqli_query($connect, "SELECT * FROM `orders` WHERE `id_user` = '$user_id'");

    while($row = mysqli_fetch_assoc($orders)):?> 
        <tr>
            <th scope="row"></th>
            <td><?php echo $row['date']?></td>
            <td><?php echo $row['date']?></td>
            <td><?php echo $row['date']?></td>
            <td><?php echo $row['status']?></td>
            <td><button type="button" class="btn btn-sm btn-warning">Удалить заказ</button></td>
        </tr>
    <?php endwhile;?>    
