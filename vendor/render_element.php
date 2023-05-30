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
        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $item) {
                $product = $this->connect->query("SELECT * FROM products WHERE id = '{$item['id']}'");
                $row = $product->fetch_assoc();
                $this->cost += $row['price'];
                $this->renderCartItem($row, $item['quantity']);
            }
        }
    }

    private function renderCartItem($row, $quantity)
    {
        ?>
        <tr>
            <td>
                <img width="100" height="100" alt="logo" src="/resources/images/<?php echo $row['image'] ?>">
            </td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['about'] ?></td>
            <td><input type="number" min="1" name="quantity_input_<?php echo $this->numberOfPositions ?>"
                       value="<?php echo $quantity ?>"></td>
            <td><?php echo $row['price'] ?></td>
        </tr>
        <?php
    }

    public function renderTotalPrice()
    {
        ?>
        <thead>
        <tr class="fw-bold" style="font-size: 20px;">
            <th scope="row"></th>
            <td colspan="2"></td>
            <td></td>
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
                    <img style="object-fit: contain" class="border border-dark" src="/resources/images/<?php echo $row['image'] ?>" class="d-block w-100" alt="..." height="300">
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
                    <p class="text-start" style="font-size: 30px;"><b><?php echo $row['name'] ?></b></p>
                    <p class="text-start" style="font-size: 20px;"><b>Цена:</b><?php echo $row['price'] ?></p>
                    <p class="text-start" style="font-size: 20px;"><b>Страна производитель:</b> <?php echo $row['country'] ?></p>
                    <p class="text-start" style="font-size: 20px;"><b>Вид товара:</b> <?php echo $row['about'] ?></p>
                    <p class="text-start" style="font-size: 20px;"><b>Цвет товара:</b> <?php echo $row['about'] ?></p>
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
            $position = explode(';', $row['products_info']);
            foreach($position as $item){
                $arr = explode(',', $item);
                array_push($test, $arr);
            }
            $this->renderOrderItem($row, $position);
        }
    }

    private function renderOrderItem($row, $position){
        ?> 
        <tr>
            <th scope="row"></th>
            <td><?php echo $row['date']?></td>
            <td><?php echo count($position)?></td>
            <td><?php echo $row['date']?></td>
            <td><?php echo $row['status']?></td>
            <td><button type="button" class="btn btn-sm btn-warning">Удалить заказ</button></td>
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
}
?>