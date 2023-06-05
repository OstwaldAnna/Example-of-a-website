<?
    require_once 'connect.php';
    session_start();

    $password = md5($_POST['password']);
    // если пароль правильный то формируем заказ и заносим его в бд
    if($password === $_SESSION['user']['password']){
        $counter = 0;
        foreach($_POST as $key => $value) {

            if (strpos($key, "quantity_input_") !== false){
                $_SESSION['cart'][$counter]['quantity'] = $value;
                $counter++;
            } 
        }

        $str = "";
        $count = 0;
        foreach($_SESSION['cart'] as $item){
            if($count == 0){
                $str = $str . $item['id'] . "," . $item['quantity'];   
            }
            else {
                $str = $str . ";" . $item['id'] . "," . $item['quantity'];
            }
            $count++;
        }

        $id_user = $_SESSION['user']['id'];
        $date_now = date("Y-m-d H:i:s");
        $status = "Новый";
        $comment = "";
        $db = new Database();
        $result = $db->query("INSERT INTO `orders` (`id`, `id_user`, `date`, `status`, `comment`, `products_info`)
        VALUES (NULL, '$id_user', '$date_now', '$status', '$comment', '$str')");

        unset($_SESSION['cart']);

        header('Location: ../pages/my_orders.php');
        }
    else{
        $_SESSION['message'] = "Не правильный пароль";
        header('Location: ../pages/ready_order.php');
    }

?>