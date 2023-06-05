<?php
require_once 'connect.php';

class RenderElement
{
    private $connect;
    private $cost = 0;

    public function __construct() //Подключается к БД
    {
        $this->connect = new Database();
    }

    public function renderCartItems() //Вывод корзины, всех элементов
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

    private function renderCartItem($row, $quantity, $counter) //Вывод корзины, элемента
    {
        ?>
        <tr>
            <td>
                <img width="100" height="100" alt="logo" src="/resources/images/<?php echo $row['image'] ?>">
            </td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['description'] ?></td>
            <td><input type="number" min="1" name="quantity_input_<?php echo $counter ?>" value="<?php echo $quantity ?>"></td>
            <td><?php echo $row['price'] ?></td>
        </tr>
        <?php
    }

    public function renderTotalPrice() //Вывод итоговой цены
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

    //Вывод всего каталога
    public function renderCatalogItems($query){
        $result = $this->connect->query($query);
        while ($row = mysqli_fetch_assoc($result)){
            $this->renderCatalogItem($row);
        }
    }

    //Вывод каждого элемента каталога
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
                                <a href="../pages/product_card.php?id=<?php echo $row['id'] ?>" class="btn btn-dark">Подробнее</a>
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

    //Вывод карусели
    public function renderCarousel(){
        $result = $this->connect->query("SELECT * FROM products ORDER BY id DESC LIMIT 5");
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

    //Вывод первого элемента карусели
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

    //Вывод остальных элементов карусели
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

    //Вывод карточки товара
    public function renderProductCard($id){
        $result = $this->connect->query("SELECT * FROM products WHERE id = '$id'");
        $row = mysqli_fetch_assoc($result);

        ?>
        <div class="container mt-5 text-center">
            <div class="row">
                <div class="col">
                    <img width="800" class="img_obj_fit_contain" height="500" alt="map" src="/resources/images/<?php echo  $row['image'] ?>">
                </div>
                <div class="col">
                    <p class="text-start f30"><b><?php echo $row['name'] ?></b></p>
                    <p class="text-start f20"><b>Цена:</b><?php echo $row['price'] ?></p>
                    <p class="text-start f20"><b>Описание:</b><?php echo $row['description'] ?></p>
                    <p class="text-start f20"><b>Категория:</b><?php echo $row['category'] ?></p>
                    <p class="text-start f20"><b>Страна производитель:</b> <?php echo $row['country'] ?></p>
                    <p class="text-start f20"><b>Год производства:</b> <?php echo $row['year'] ?></p>
                    <?php if (isset($_SESSION["user"])) {
                        echo '<a href="/vendor/go_to_cart.php?id=' . $row['id'] . '" class="btn btn-sm btn-primary text-start">В корзину</a>';
                    } ?>
                </div>
            </div>
        </div>
        <?php
    }

    //Вывод всех элементов заказа
    public function renderOrderItems(){
        session_start();
        $user_id = $_SESSION['user']['id'];
        $result = $this->connect->query("SELECT * FROM `orders` WHERE `id_user` = '$user_id' ORDER BY `id` ASC");
        while($row = mysqli_fetch_assoc($result)){
            $products = explode(';', $row['products_info']);
            $this->renderOrderItem($row, count($products));
        }
    }

    //Вывод элемента заказа
    private function renderOrderItem($row, $quantity){
        ?> 
        <tr>
            <td>Заказ №<?php echo $row['id']?></td>
            <td><?php echo $quantity?></td>
            <td><?php echo $row['status']?></td>
            <td><?php echo $row['comment']?></td>
            <?if ($row['status'] == "Новый"):?>
                <td><a href="../vendor/delete_order.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-dark">Удалить заказ</a></td>
            <?endif;?>
        </tr>
        <?php
    }

    //Вывод информации о пользователе
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

    //Вывод всех товаров
    public function renderAllProductsItems(){
        $result = $this->connect->query("SELECT * FROM `products`");
        while($row = mysqli_fetch_assoc($result)){
            $this->renderAllProductsItem($row);
        }
    }

    //Вывод каждого товара
    private function renderAllProductsItem($row){
        ?> 
        <tr>
            <td>
                <img width="100" height="100" alt="logo" src="/resources/images/<?php echo $row['image'] ?>">
            </td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['price']?></td>
            <td><a href="../vendor/delete_product.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-dark">Удалить товар</a></td>
            <td><a href="../pages/edit_product.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-dark">Изменить товар</a></td>
        </tr>
        <?php
    }

    //Вывод всех категорий (для управления)
    public function renderAllCategorys(){
        $result = $this->connect->query("SELECT * FROM `categorys`");
        while($row = mysqli_fetch_assoc($result)){
            $this->renderCategory($row);
        }
    }

    //Вывод каждой категории (для управления)
    private function renderCategory($row){
        ?> 
        <tr>
            <td><?php echo $row['name']?></td>
            <td><a href="../vendor/delete_category.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-dark">Удалить категорию</a></td>
            <td><a href="../pages/edit_category.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-dark">Изменить категорию</a></td>
        </tr>
        <?php
    }

    //Вывод всех заказов (для управления)
    public function renderAllOrders($query){
        $result = $this->connect->query($query);
            while($row = mysqli_fetch_assoc($result)){
                $products = explode(';', $row['products_info']);
                
                $FIO = $_SESSION['user']['surname'] . " " . $_SESSION['user']['name'] . " " . $_SESSION['user']['patronomyc'];
                $this->renderOrdersItem($row, $FIO, count($products));
        }
    }

    //Вывод каждого заказа (для управления)
    private function renderOrdersItem($row, $FIO, $products){
        ?> 
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['date']?></td>
            <td><?php echo $FIO?></td>
            <td><?php echo $products?></td>
            <td><?php echo $row['status']?></td>
            <?php if($row["status"] == "Новый"):?>
                <td><a href="../pages/cancel_order.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-dark">Отменить</a></td>
                <td><a href="../vendor/accept_order.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-dark">Подтвердить</a></td>
            <?php endif;?>
        </tr>
        <?php
    }
}
?>