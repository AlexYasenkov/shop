<?php

/* Подключаем модели */
require_once '../models/CategoryModel.php';
require_once '../models/ProductModel.php';

/* Формирование главной страницы */
function indexAction($smarty)
{
    $paginator = [];
    $paginator['currentPage'] = isset($_GET['page']) ? $_GET['page'] : 1;

    $paginator['sizePage'] = 3;
    $paginator['offset'] = ($paginator['currentPage'] - 1) * $paginator['sizePage'];

    $paginator['pageCount'] = ceil(getCountProducts()['count_products'] / $paginator['sizePage']);

    $lastProducts = getLastProducts($paginator['offset'], $paginator['sizePage']);
    $allCategories = getAllCategories();

    $smarty->assign('pageTitle', 'Главная страница сайта');
    $smarty->assign('paginator', $paginator);
    $smarty->assign('allCategories', $allCategories);
    $smarty->assign('lastProducts', $lastProducts);

    loadTemplate($smarty, 'index');
}