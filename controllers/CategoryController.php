<?php

require_once '../models/CategoryModel.php';
require_once '../models/ProductModel.php';

function indexAction($smarty)
{
    $categoryId = (isset($_GET['id']) && !empty($_GET['id'])) ? $_GET['id'] : null;

    if (! $categoryId) exit('Нет такой категории');

    $products = getProductsByCatId($categoryId);
    $allCategories = getAllCategories();

    $smarty->assign('pageTitle', 'Страница товаров');
    $smarty->assign('allCategories', $allCategories);
    $smarty->assign('products', $products);

    loadTemplate($smarty, 'category/index');
}