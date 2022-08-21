<?php

/* Сохраняем в бд покупки пользователя */
function saveUserPurchases($orderId, $cart)
{
    global $dbConnect;

    $sql = "INSERT INTO `purchases` (`order_id`, `product_id`, `price`, `amount`)
            VALUES ";
    $values = [];
    foreach ($cart as $item) {
        $values[] = "('{$orderId}', '{$item['id']}', '{$item['realPrice']}', '{$item['count']}')";
    }
    $sql .= implode($values, ', ');

    $query = mysqli_query($dbConnect, $sql);

    if (! $query) {
        echo 'Error: ' . mysqli_error($dbConnect);
        exit();
    }

    return true;
}

function getUserPurchases($orderId)
{
    global $dbConnect;

    $orderId = clearStr($dbConnect, $orderId);

    $sql = "SELECT `purchases`.*, `products`.`name` FROM `purchases`
            JOIN `products` ON `purchases`.`product_id` = `products`.`id`
            WHERE `purchases`.`order_id` = '{$orderId}'";

    $query = mysqli_query($dbConnect, $sql);

    return dataQueryToArray($dbConnect, $query);
}