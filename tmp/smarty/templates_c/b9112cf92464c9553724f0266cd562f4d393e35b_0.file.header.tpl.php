<?php
/* Smarty version 3.1.34-dev-7, created on 2021-09-15 16:35:48
  from '/var/www/html/shop/views/default/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6141f6b43f86a1_75935722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9112cf92464c9553724f0266cd562f4d393e35b' => 
    array (
      0 => '/var/www/html/shop/views/default/header.tpl',
      1 => 1629088371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6141f6b43f86a1_75935722 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/style.css">
</head>
<body>
<header class="header py-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center"><?php echo $_smarty_tpl->tpl_vars['myShop']->value;?>
</h2>
                <div class="text-right">
                    <a href="/cart" class="text-decoration-none text-success">
                        <span class="h5">&#10066;</span>
                        <span class="cart-count-items">
                            <?php if ((isset($_smarty_tpl->tpl_vars['cartCountItems']->value)) && $_smarty_tpl->tpl_vars['cartCountItems']->value > 0) {?>
                                <?php echo $_smarty_tpl->tpl_vars['cartCountItems']->value;?>

                            <?php }?>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header><?php }
}
