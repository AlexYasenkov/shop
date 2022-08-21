<?php

/* Подключение к БД */
define('DB_HOST', '127.0.0.1');
define('DB_NAME', '');
define('DB_USER', '');
define('DB_PASSWORD', '');

$dbConnect = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (! $dbConnect) {
    echo 'Error: ' . mysqli_connect_error();
    exit();
}

mysqli_set_charset($dbConnect, 'utf8');