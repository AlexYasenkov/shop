<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

define('CONTROLLER_PATH_PREFIX', '../controllers/');
define('CONTROLLER_PATH_POSTFIX', 'Controller.php');

/* Константы для обращения к сессионным переменным */
define('APP_ID', 'application');

/* Определяем путь к файлам шаблона */
$template = 'default';
define('TEMPLATE_PATH_PREFIX', '../views/' . $template . '/');
define('TEMPLATE_PATH_POSTFIX', '.tpl');
define('TEMPLATE_WEB_PATH', '../templates/' . $template . '/');

$templateAdmin = 'admin';
define('TEMPLATE_ADMIN_PATH_PREFIX', '../views/' . $templateAdmin . '/');
define('TEMPLATE_ADMIN_WEB_PATH', '../templates/' . $templateAdmin . '/');

/* Константы для загрузки файлов */
define('TEMPLATE_WEB_UPLOAD_PATH', '/templates/' . $template . '/images');