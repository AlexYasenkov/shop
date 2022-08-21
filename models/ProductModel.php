<?php

/* Получаем последние добавленные товары */
function getLastProducts($offset = 0, $limit = null)
{
    global $dbConnect;

    $sql = 'SELECT * FROM products ORDER BY id DESC';

    if ($limit) {
        $sql .= " LIMIT {$offset}, {$limit}";
    }

    $query = mysqli_query($dbConnect, $sql);

    return dataQueryToArray($dbConnect, $query);
}

/* Получаем общее количесто товаров */
function getCountProducts()
{
    global $dbConnect;

    $sql = 'SELECT COUNT(id) as `count_products` FROM `products`';

    $query = mysqli_query($dbConnect, $sql);

    return rowQueryToArray($dbConnect, $query);
}

/* Получаем категорию товаров по id */
function getProductsByCatId($categoryId)
{
    global $dbConnect;

    $id = mysqli_real_escape_string($dbConnect, $categoryId);

    $sql = "SELECT * FROM products WHERE category_id = '{$id}'";

    $query = mysqli_query($dbConnect, $sql);

    return dataQueryToArray($dbConnect, $query);
}

/* Получить список товаров из массива ids */
function getProductsFromArrayIds($itemsIds)
{
    global $dbConnect;

    $strIds = implode($itemsIds, ',');

    $ids = mysqli_real_escape_string($dbConnect, $strIds);

    $sql = "SELECT * FROM products WHERE id IN ({$ids})";

    $query = mysqli_query($dbConnect, $sql);

    return dataQueryToArray($dbConnect, $query);
}

/* Получаем товар по id */
function getProductById($productId)
{
    global $dbConnect;

    $id = mysqli_real_escape_string($dbConnect, $productId);

    $sql = "SELECT * FROM products WHERE id = '{$id}'";

    $query = mysqli_query($dbConnect, $sql);

    return rowQueryToArray($dbConnect, $query);
}
