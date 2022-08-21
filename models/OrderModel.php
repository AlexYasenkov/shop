<?php

function makeNewOrder($userId)
{
    global $dbConnect;

    $dateCreated = date('Y.m.d H:i:s');
    $userIP = $_SERVER['REMOTE_ADDR'];
    $userId = clearStr($dbConnect, $userId);

    $sql = "INSERT INTO `orders` (`user_id`, `date_created`, `user_ip`)
            VALUES('{$userId}', '{$dateCreated}', '{$userIP}')";

    $query = mysqli_query($dbConnect, $sql);

    if (! $query) {
        echo 'Error: ' . mysqli_error($dbConnect);
        exit();
    }

    return true;
}

function getLastOrderId()
{
    global $dbConnect;

    $sql = 'SELECT `id` FROM `orders` ORDER BY `id` DESC LIMIT 1';

    $query = mysqli_query($dbConnect, $sql);

    return rowQueryToArray($dbConnect, $query);
}

function getOrdersByUserId($userId)
{
    global $dbConnect;

    $userId = clearStr($dbConnect, $userId);

    $sql = "SELECT * FROM `orders` WHERE `user_id` = '{$userId}' ORDER BY `id` DESC";

    $query = mysqli_query($dbConnect, $sql);

    return dataQueryToArray($dbConnect, $query);
}

function getOrders()
{
    global $dbConnect;

    $sql = "SELECT `orders`.*, `users`.`name`, `users`.`email`, `users`.`phone`, `users`.`address` 
            FROM `orders` LEFT JOIN `users` 
            ON `orders`.`user_id` = `users`.`id` 
            ORDER BY `orders`.`id` DESC";

    $query = mysqli_query($dbConnect, $sql);

    $orders = dataQueryToArray($dbConnect, $query);

    foreach ($orders as &$order) {
        $order['products'] = getUserPurchases($order['id']);
    }

    return $orders;
}