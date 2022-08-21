<?php

/* Регистрация нового пользователя */
function registerUser(array $data = [])
{
    global $dbConnect;

    $values = [];
    foreach ($data as $key => $val) {
        if ($key === 'password')
            $values[$key] = clearStr($dbConnect, md5($val));
        else
            $values[$key] = clearStr($dbConnect, $val);
    }

    $sql = "INSERT INTO `users` (`email`, `password`, `name`, `phone`, `address`) 
            VALUES('" . implode("', '",$values) . "')";

    $query = mysqli_query($dbConnect, $sql);

    if (! $query) {
        echo 'Error: ' . mysqli_error($dbConnect);
        exit();
    }

    return true;
}

/* Обновление данных пользователя */
function updateUser(array $data = [])
{
    global $dbConnect;

    $values = [];
    foreach ($data as $key => $val) {
        $values[$key] = clearStr($dbConnect, $val);
    }

    $sql = "UPDATE `users` SET ";

    if (isset($values['password']))
        $sql .= "`password` = '{$values['password']}',";

    $sql .= "`name` = '{$values['name']}', `phone` = '{$values['phone']}', `address` = '{$values['address']}' 
            WHERE `email` = '{$values['email']}' 
            LIMIT 1";

    $query = mysqli_query($dbConnect, $sql);

    if (! $query) {
        echo 'Error: ' . mysqli_error($dbConnect);
        exit();
    }

    return true;
}

function loginUser($email, $password)
{
    global $dbConnect;

    $email = clearStr($dbConnect, $email);
    $password = clearStr($dbConnect, $password);

    $sql = "SELECT * FROM `users` 
            WHERE (`email` = '{$email}' AND `password` = '{$password}') LIMIT 1";

    $query = mysqli_query($dbConnect, $sql);

    return rowQueryToArray($dbConnect, $query);
}


function getUserEmail($email)
{
    global $dbConnect;

    $email = clearStr($dbConnect, $email);

    $sql = "SELECT `email` FROM `users` WHERE email = '{$email}' LIMIT 1";

    $query = mysqli_query($dbConnect, $sql);

    return rowQueryToArray($dbConnect, $query);
}

function getUserIdByEmail($email)
{
    global $dbConnect;

    $email = clearStr($dbConnect, $email);

    $sql = "SELECT `id` FROM `users` WHERE email = '{$email}' LIMIT 1";

    $query = mysqli_query($dbConnect, $sql);

    return rowQueryToArray($dbConnect, $query);
}