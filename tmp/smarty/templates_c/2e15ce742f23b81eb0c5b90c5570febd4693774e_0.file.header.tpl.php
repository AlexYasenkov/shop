<?php
/* Smarty version 3.1.34-dev-7, created on 2021-09-15 16:36:09
  from '/var/www/html/shop/views/admin/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6141f6c9a67dc1_81186486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e15ce742f23b81eb0c5b90c5570febd4693774e' => 
    array (
      0 => '/var/www/html/shop/views/admin/header.tpl',
      1 => 1631099647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6141f6c9a67dc1_81186486 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateAdminWebPath']->value;?>
css/style.css">
</head>
<body>
<header class="header py-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center"><?php echo $_smarty_tpl->tpl_vars['myShop']->value;?>
</h2>
            </div>
        </div>
    </div>
</header><?php }
}
