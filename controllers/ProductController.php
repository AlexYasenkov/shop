<?php

require_once '../models/CategoryModel.php';
require_once '../models/ProductModel.php';

function indexAction($smarty)
{
    $productId = (isset($_GET['id']) && !empty($_GET['id'])) ? $_GET['id'] : null;

    if (! $productId) exit('Нет такого товара');

    $product = getProductById($productId);
    $allCategories = getAllCategories();

    $smarty->assign('pageTitle', 'Страница товара');
    $smarty->assign('allCategories', $allCategories);
    $smarty->assign('product', $product);

    loadTemplate($smarty, 'product/index');
}