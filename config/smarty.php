<?php

require_once('../library/smarty/libs/Smarty.class.php');

/* Инициализация шаблонизатора Smarty */
$smarty = new Smarty();
$smarty->setTemplateDir(TEMPLATE_PATH_PREFIX);
$smarty->setCompileDir('../tmp/smarty/templates_c/');
$smarty->setConfigDir('../tmp/smarty/configs/');
$smarty->setCacheDir('../tmp/smarty/cache/');

/* Определяем переменные, которые будут доступны во всех шаблонах */
$smarty->assign('templateWebPath',TEMPLATE_WEB_PATH);
$smarty->assign('myShop', 'MyShop - Интернет магазин');

(getSession('cart')) ? $smarty->assign('cartCountItems', count(getSession('cart'))) : null;
(getSession('user')) ? $smarty->assign('userRegisterData', getSession('user')) : null;