<?php

/* Получаем все категории */
function getAllCategories()
{
    global $dbConnect;

    $sql = 'SELECT * FROM categories WHERE parent_id IS NULL';

    $query = mysqli_query($dbConnect, $sql);

    $categories = dataQueryToArray($dbConnect, $query);

    $result = [];
    foreach ($categories as $category) {

        if (getAllSubcategories($category['id'])) {
            $category['subcategory'] = getAllSubcategories($category['id']);
        }
        $result[] = $category;
    }
    return $result;
}

/* Получаем все подкатегории */
function getAllSubcategories($categoryId)
{
    global $dbConnect;

    $id = mysqli_real_escape_string($dbConnect, $categoryId);

    $sql = "SELECT * FROM categories WHERE parent_id = '{$id}'";

    $query = mysqli_query($dbConnect, $sql);

    return dataQueryToArray($dbConnect, $query);
}