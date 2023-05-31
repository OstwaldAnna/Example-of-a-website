<?php
require_once 'connect.php';

class RenderElement
{
    private $connect;
    private $cost = 0;
    private $countCarousel = 0;

    public function __construct()
    {
        $this->connect = new Database();
    }

    public function renderCartItems()
    {
        $counter = 0;
        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $item) {
                $product = $this->connect->query("SELECT * FROM products WHERE id = '{$item['id']}'");
                $row = $product->fetch_assoc();
                $this->cost += $row['price'];
                $this->renderCartItem($row, $item['quantity'], $counter);
                $counter++;
            }
        }
    }

    private function renderCartItem($row, $quantity, $counter)
    {
        ?>
        <tr>
            <td>
                <img width="100" height="100" alt="logo" src="/resources/images/<?php echo $row['image'] ?>">
            </td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['about'] ?></td>
            <td><input type="number" min="1" name="quantity_input_<?php echo $counter ?>" value="<?php echo $quantity ?>"></td>
            <td><?php echo $row['price'] ?></td>
        </tr>
        <?php
    }

    public function renderTotalPrice()
    {
        ?>
        <thead>
        <tr class="fw-bold f20">
            <th scope="row"></th>
            <td colspan="2"></td>
            <td>Итоговая цена:</td>
            <td><?php echo $this->cost ?></td>
        </tr>
        </thead>
        <?php
    }

    public function renderCatalogItems($query){
        $db = new Database();
        $result = $db->query($query);
        while ($row = mysqli_fetch_assoc($result)){
            $this->renderCatalogItem($row);
        }
    }

    private function renderCatalogItem($row){
        ?>
            <div class="col">
                <div class="card mb-4">
                    <img class="border border-dark img_obj_fit_contain img_h30" src="/resources/images/<?php echo $row['image'] ?>" class="d-block w-100" alt="...">
                    <div class="card-body">
                        <p class="text-start" class="card-text"><?php echo $row['name'] ?></p>
                        <p class="text-start" class="card-text"><?php echo $row['model'] ?></p>
                        <p class="text-start" class="card-text"><?php echo $row['price'] ?> руб.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <a href="../pages/product_card.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Подробнее</a>
                                <?php if (isset($_SESSION["user"])) {
                                    echo '<a href="/vendor/go_to_cart.php?id=' . $row['id'] . '" class="btn btn-outline-secondary">В корзину</a>';
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
    }

    public function renderCarousel(){
        $db = new Database();
        $result = $db->query("SELECT * FROM products ORDER BY id DESC LIMIT 5");
        $countCarousel = 0;
        while($row = mysqli_fetch_assoc($result)){
            if($countCarousel == 0){
                $this->renderActiveCarouselItem($row);
            } else {
                $this->renderUsealCarouselItem($row);
            }
            $countCarousel++;
        }
    }

    private function renderActiveCarouselItem($row){
        ?>
        <div class="carousel-item active" data-bs-interval="1000">
        <a href="pages/product_card.php?id=<?php echo $row['id']?>"><img  class="border border-dark " src="resources/images/<?php echo $row['image']?>"  class="d-block w-100" alt="..."></a>
          <div class="carousel-caption d-none d-md-block">
            <h5><?php echo $row['name'] ?></h5>
            <p><?php echo $row['model'] ?></p>
          </div>
        </div>
        <?php
    }

    private function renderUsealCarouselItem($row){
        ?>
            <div class="carousel-item" data-bs-interval="1000">
                <a href="pages/product_card.php?id=<?php echo $row['id']?>"><img  class="border border-dark  " src="resources/images/<?php echo $row['image']?>"  class="d-block w-100" alt="..."></a>
                <div class="carousel-caption d-none d-md-block">
                    <h5><?php echo $row['name']?></h5>
                    <p><?php echo $row['model'] ?></p>
                </div>
            </div>
        <?php
    }

    public function renderProductCard($id){
        $db = new Database();
        $result = $db->query("SELECT * FROM products WHERE id = '$id'");
        $row = mysqli_fetch_assoc($result);

        ?>
        <div class="container mt-5 text-center">
            <div class="row">
                <div class="col">
                    <img width="800" height="500" alt="map" src="/resources/images/<?php echo  $row['image'] ?>">
                </div>
                <div class="col">
                    <p class="text-start f30"><b><?php echo $row['name'] ?></b></p>
                    <p class="text-start f20"><b>Цена:</b><?php echo $row['price'] ?></p>
                    <p class="text-start f20"><b>Страна производитель:</b> <?php echo $row['country'] ?></p>
                    <p class="text-start f20"><b>Вид товара:</b> <?php echo $row['about'] ?></p>
                    <p class="text-start f20"><b>Цвет товара:</b> <?php echo $row['about'] ?></p>
                    <?php if (isset($_SESSION["user"])) {
                        echo '<a href="/vendor/go_to_cart.php?id=' . $row['id'] . '" class="btn btn-sm btn-primary text-start">В корзину</a>';
                    } ?>
                </div>
            </div>
        </div>
        <?php
    }

    public function renderOrderItems(){
        session_start();
        $user_id = $_SESSION['user']['id'];
        $db = new Database();
        $result = $db->query("SELECT * FROM `orders` WHERE `id_user` = '$user_id'");
        while($row = mysqli_fetch_assoc($result)){
            $products = explode(';', $row['products_info']);
            $this->renderOrderItem($row, count($products));
        }
    }

    private function renderOrderItem($row, $quantity){
        ?> 
        <tr>
            <td>Заказ №<?php echo $row['id']?></td>
            <td><?php echo $quantity?></td>
            <td><?php echo $row['status']?></td>
            <td><?php echo $row['comment']?></td>
            <?if ($row['status'] == "Новый"):?>
                <td><a href="../vendor/delete_order.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-warning">Удалить заказ</a></td>
            <?endif;?>
        </tr>
        <?php
    }

    public function renderProfileInfo(){
        session_start();
        $user = $_SESSION['user'];?>
        
        <div class="card">
            <div class="card-header">
                Профиль
            </div>
            <div class="card-body">
                <p class="card-text">Фамилия: <?php echo $user['surname'] ?></p>
                <p class="card-text">Имя: <?php echo $user['name'] ?></p>
                <p class="card-text">Отчество: <?php echo $user['patronymic'] ?></p>
                <p class="card-text">Логин: <?php echo $user['login'] ?></p>
                <p class="card-text">Почта: <?php echo $user['email'] ?></p>
            </div>
        </div>
        <?php
    }

    public function renderAllOrdersItems(){
        session_start();
        $user_id = $_SESSION['user']['id'];
        $db = new Database();
        $result = $db->query("SELECT * FROM `orders` WHERE `id_user` = '$user_id'");
        while($row = mysqli_fetch_assoc($result)){
            $products = explode(';', $row['products_info']);
            $this->renderOrderItem($row, count($products));
        }
    }

    private function renderAllOrdersItem($row, $quantity){
        ?> 
        <tr>
            <td>Заказ №<?php echo $row['id']?></td>
            <td><?php echo $quantity?></td>
            <td><?php echo $row['status']?></td>
            <td><?php echo $row['comment']?></td>
            <?if ($row['status'] == "Новый"):?>
                <td><a href="../vendor/delete_order.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-warning">Удалить заказ</a></td>
            <?endif;?>
        </tr>
        <?php
    }
}
?>