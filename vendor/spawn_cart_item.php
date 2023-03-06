<?php 
    
    require_once 'connect.php';

    if(isset($_SESSION['cart'])):
        $cost = 0;
        foreach($_SESSION['cart'] as $item):            
            $id = $item['id'];
            $product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$id'");
            while ($row = mysqli_fetch_assoc($product)):
                $cost = $cost + $row['price']?>
                <tr>
                    <th scope="row">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" onclick="(el = document.getElementById('qwerty')).checked = !el.checked">
                            <label class="form-check-label" for="same-address"></label>
                        </div>
                    </th>
                    <td>
                        <img width="100" height="100" alt="logo" src="/resources/image/<?php echo $row['image']?>">
                    </td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['about']?></td>
                    <td>Здесь должно быть реализовано количество</td>
                    <td><?php echo $row['price']?></td>
                </tr>
        <?php endwhile; endforeach; endif;?>
    <thead>
        <tr class="fw-bold" style="font-size: 20px;">
            <th scope="row"></th>
            <td colspan="2"></td>
            <td></td>
            <td>Итоговая цена:</td>
            <td><?php echo $cost?></td>
        </tr>
    </thead>

