<?php

require_once '../models/CategoryModel.php';
require_once '../models/UserModel.php';
require_once '../models/OrderModel.php';
require_once '../models/PurchaseModel.php';
require_once '../models/ProductModel.php';

require_once 'services/UserRegistration.php';

function indexAction($smarty)
{
    if (! getSession('user')) redirect('/');

    if (getSession('user')) {
        $userId = getUserIdByEmail(getSession('user')['email'])['id'];
        $userOrders = getOrdersByUserId($userId);
        foreach ($userOrders as &$order) {
            $order['products'] = getUserPurchases($order['id']);
        }
        $smarty->assign('userOrders', $userOrders);
    }

    $allCategories = getAllCategories();

    $smarty->assign('pageTitle', 'Страница пользователя');
    $smarty->assign('allCategories', $allCategories);

    loadTemplate($smarty, 'user/index');
}

function registrationAction($smarty)
{
    $allCategories = getAllCategories();

    $smarty->assign('pageTitle', 'Регистрация пользователя');
    $smarty->assign('allCategories', $allCategories);

    loadTemplate($smarty, 'user/registration');
}

function registerAction()
{
    $userData = [
        'email' => getInputByPostData('email'),
        'password' => getInputByPostData('password'),
        'confirmPwd' => getInputByPostData('confirmPwd'),
        'name' => getInputByPostData('userName'),
        'phone' => getInputByPostData('userPhone'),
        'address' => getInputByPostData('userAddress')
    ];

    $resultData = checkRegisterParams($userData);

    if (getUserEmail($userData['email'])) {
        $resultData['success'] = false;
        $resultData['message'] = "Пользователь с таким email {$userData['email']} уже существует!";
    }

    if (! $resultData && ! getUserEmail($userData['email'])) {
        unset($userData['confirmPwd']);

        if (registerUser($userData)) {
            $resultData = setResultUserData($userData, 'Пользователь успешно зарегистрирован');
            setSession('user', $resultData);
        } else {
            $resultData['success'] = false;
            $resultData['message'] = 'Ошибка регистрации';
        }
    }

    echo json_encode($resultData);
}

function updateAction()
{
    $password = getInputByPostData('password');
    $confirmPwd = getInputByPostData('confirmPwd');
    $name = getInputByPostData('userName');
    $phone = getInputByPostData('userPhone');
    $address = getInputByPostData('userAddress');

    $resultData = checkUpdateParams($password, $confirmPwd, $name, $phone, $address);

    if (! $resultData) {

        $userData = [
            'email' => getSession('user')['email'],
            'name' => $name,
            'phone' => $phone,
            'address' => $address
        ];

        if (! empty($password))
            $userData ['password'] = md5($password);

        if (updateUser($userData)) {
            $resultData = setResultUserData($userData, 'Данные успешно обновлены');
            setSession('user', $resultData);
        } else {
            $resultData['success'] = false;
            $resultData['message'] = 'Ошибка изменения данных';
        }
    }

    echo json_encode($resultData);
}

function loginAction()
{
    $email = getInputByPostData('email');
    $password = getInputByPostData('password');

    $resultData = checkAuthorizationParams($email, $password);

    if (! $resultData) {
        $userData = loginUser($email, md5($password));

        if ($userData) {
            $resultData = setResultUserData($userData, 'Пользователь успешно авторизован');
            setSession('user', $resultData);
        } else {
            $resultData['success'] = false;
            $resultData['message'] = 'Неверный логин или пароль';
        }
    }

    echo json_encode($resultData);
}

function logoutAction()
{
    if (getSession('user')) {
        delSession('user');
        delSession('cart');
        delSession('saleCart');
    }

    redirect('/');
}