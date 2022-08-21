<?php
/* Smarty version 3.1.34-dev-7, created on 2021-09-15 16:35:48
  from '/var/www/html/shop/views/default/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6141f6b443ae71_14695277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '136aa02bea5837b52724ca69496e22f1e94015c8' => 
    array (
      0 => '/var/www/html/shop/views/default/menu.tpl',
      1 => 1630069260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6141f6b443ae71_14695277 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-2">
    <ul class="nav flex-md-column">
        <li class="nav-item">
            <a href="/" class="nav-link">На главную</a>
        </li>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allCategories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <?php if ((isset($_smarty_tpl->tpl_vars['category']->value['subcategory']))) {?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a>
                    <div class="dropdown-menu">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value['subcategory'], 'subcategory');
$_smarty_tpl->tpl_vars['subcategory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->do_else = false;
?>
                            <a href="/category/<?php echo $_smarty_tpl->tpl_vars['subcategory']->value['id'];?>
"
                               class="dropdown-item"><?php echo $_smarty_tpl->tpl_vars['subcategory']->value['name'];?>
</a>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </li>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <?php if (empty($_smarty_tpl->tpl_vars['userRegisterData']->value)) {?>
        <div class="user-authorization-box">
            <form id="userAuthorizationForm" class="mt-5" action="#" method="POST">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <button id="btnUserAuthorization" type="submit" class="btn btn-primary">Войти</button>
            </form>
            <div class="mt-3"><a href="/user/registration" class="font-italic text-info">Регистрация</a></div>
        </div>
    <?php } else { ?>
        <div class="mt-5">
            <p class="font-italic">Welcome!</p>
            <a href="/user"><?php echo $_smarty_tpl->tpl_vars['userRegisterData']->value['name'];?>
</a>
            <a href="/user/logout" id="btnUserLogout" class="btn btn-outline-dark btn-sm">Выход</a>
        </div>
    <?php }?>
</div><?php }
}
