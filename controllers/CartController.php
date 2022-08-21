<?php

require_once '../models/CategoryModel.php';
require_once '../models/ProductModel.php';
require_once '../models/UserModel.php';
require_once '../models/OrderModel.php';
require_once '../models/PurchaseModel.php';

/* Если в сессии нет массива корзины, то создаем его */
if (! getSession('cart')) setSession('cart', []);

function indexAction($smarty)
{
    $allCategories = getAllCategories();
    $cartItemsIds = getSession('cart');

    $products = [];
    if (isset($cartItemsIds) && !empty($cartItemsIds))
        $products = getProductsFromArrayIds($cartItemsIds);

    $smarty->assign('pageTitle', 'Корзина');
    $smarty->assign('allCategories', $allCategories);
    $smarty->assign('products', $products);

    loadTemplate($smarty, 'cart/index');
}

function addtocartAction()
{
    $itemId = (isset($_POST['id']) && !empty($_POST['id'])) ? intval($_POST['id']) : null;
    if (! $itemId) return false;

    $cartSess = getSession('cart');
    $result = [];
    if (isset($cartSess) && array_search($itemId, $cartSess) === false) {
        $cartSess[] = $itemId;
        setSession('cart', $cartSess);
        $result['countItems'] = count(getSession('cart'));
        $result['success'] = true;
    } else {
        $result['success'] = false;
    }

    echo json_encode($result);
}

function removefromcartAction()
{
    $itemId = (isset($_POST['id']) && !empty($_POST['id'])) ? intval($_POST['id']) : null;
    if (! $itemId) return false;

    $cartSess = getSession('cart');
    $key = array_search($itemId, $cartSess);
    $result = [];
    if ($key === false) {
        $result['success'] = false;
    } else {
        unset($cartSess[$key]);
        setSession('cart', $cartSess);
        $result['countItems'] = count(getSession('cart'));
        $result['success'] = true;
    }

    echo json_encode($result);
}

function orderAction($smarty)
{
    $productsIds = getSession('cart');
    if (! $productsIds) redirect('/cart');

    $countProducts = [];
    foreach ($productsIds as $productId) {
        $countProducts[$productId] = getInputByPostData("productCount_{$productId}");
    }

    $products = getProductsFromArrayIds($productsIds);
    if (! $products) redirect('/cart');

    $productItem = 0;
    foreach ($products as &$product) {
        $product['count'] = isset($countProducts[$product['id']]) ? $countProducts[$product['id']] : 0;
        if ($product['count']) {
            $product['realPrice'] = $product['count'] * $product['price'];
        } else {
            unset($products[$productItem]);
        }
        $productItem++;
    }
    setSession('saleCart', $products);

    $allCategories = getAllCategories();
    $smarty->assign('pageTitle', 'Заказы');
    $smarty->assign('allCategories', $allCategories);
    $smarty->assign('products', $products);

    loadTemplate($smarty, 'cart/order');
}

function saveorderAction($smarty)
{
    $cart = getSession('saleCart');
    $userId = getUserIdByEmail(getSession('user')['email'])['id'];
    $result = [];
    if (! $cart && ! $userId) {
        $result['success'] = false;
        $result['message'] = 'Нет товаров для заказа';
    } else {
        if (makeNewOrder($userId)) {
            $orderId = getLastOrderId()['id'];
            if (saveUserPurchases($orderId, $cart)) {
                delSession('cart');
                delSession('saleCart');
                $result['success'] = true;
                $result['message'] = 'Заказ оформлен';
            } else {
                $result['success'] = false;
                $result['message'] = 'Ошибка оформления заказа';
            }
        }
    }

    echo json_encode($result);
}