<?php

function checkRegisterParams($data)
{
    $result = [];

    foreach ($data as $value) {
        if (! $value) {
            $result['success'] = false;
            $result['message'] = 'Заполните все поля';
            return $result;
        }
    }
    if ($data['password'] !== $data['confirmPwd']) {
        $result['success'] = false;
        $result['message'] = 'Пароли не совпадают';
        return $result;
    }

    return $result;
}

function checkAuthorizationParams($email, $password)
{
    $result = [];

    if (! $password) {
        $result['success'] = false;
        $result['message'] = 'Введите пароль';
    }
    if (! $email) {
        $result['success'] = false;
        $result['message'] = 'Введите email';
    }

    return $result;
}

function checkUpdateParams($password, $confirmPwd, $name, $phone, $address)
{
    $result = [];

    if ($password !== $confirmPwd) {
        $result['success'] = false;
        $result['message'] = 'Пароли не совпадают';
    }

    if (! $name) {
        $result['success'] = false;
        $result['message'] = 'Введите имя';
    }
    if (! $phone) {
        $result['success'] = false;
        $result['message'] = 'Введите телефон';
    }
    if (! $address) {
        $result['success'] = false;
        $result['message'] = 'Введите адрес';
    }

    return $result;
}

function setResultUserData($userData, $message)
{
    $result = [];

    $result = [
        'success' => true,
        'message' => $message,
        'email' => $userData['email'],
        'name' => $userData['name'],
        'phone' => $userData['phone'],
        'address' => $userData['address'],
    ];

    return $result;
}