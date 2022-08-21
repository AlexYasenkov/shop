<?php

require_once '../models/CategoryModel.php';
require_once '../models/ProductModel.php';
require_once '../models/OrderModel.php';
require_once '../models/PurchaseModel.php';

$smarty->setTemplateDir(TEMPLATE_ADMIN_PATH_PREFIX);
$smarty->assign('templateAdminWebPath',TEMPLATE_ADMIN_WEB_PATH);

function indexAction($smarty)
{
    $smarty->assign('pageTitle', 'Админка');

    $smarty->assign('orders', getOrders());

    loadTemplate($smarty, 'index');
}

function uploadAction()
{
    $file = $_FILES['fileName'];
    $path = TEMPLATE_WEB_UPLOAD_PATH . '/products/';

    if (uploadFile($file, $path))
        echo 'Файл добавлен';
    else
        echo 'Ошибка загрузки файла';
}

function loadxmlAction()
{
    if (! file_exists($_SERVER['DOCUMENT_ROOT'].'/xml/products.xml')) {
        return false;
    } else {
        $xmlProducts = simplexml_load_file($_SERVER['DOCUMENT_ROOT'].'/xml/products.xml');
        $products = [];
        $item = 0;
        foreach ($xmlProducts as $product) {
            $products[$item]['category_id'] = intval($product->category_id);
            $products[$item]['name'] = htmlentities($product->name);
            $products[$item]['description'] = htmlentities($product->description);
            $products[$item]['price'] = floatval($product->price);
            $products[$item]['published'] = htmlentities($product->published);
            $item++;
        }
        //save...
    }
}

