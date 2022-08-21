<?php

/* Инициализация настроек */
require_once '../config/config.php';
require_once '../config/session.php';
require_once '../config/smarty.php';
require_once '../config/db.php';
require_once '../library/functions.php';

/* Определяем контроллер */
$controllerName = (isset($_GET['controller']) && !empty($_GET['controller'])) ?
    ucfirst(mb_strtolower($_GET['controller'])) : 'Index';

/* Определяем метод */
$actionName = (isset($_GET['action']) && !empty($_GET['action'])) ?
    mb_strtolower($_GET['action']) : 'index';

/* Отображаем страницу */
loadPage($smarty, $controllerName, $actionName);