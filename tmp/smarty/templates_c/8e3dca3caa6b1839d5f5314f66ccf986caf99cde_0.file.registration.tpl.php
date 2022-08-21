<?php
/* Smarty version 3.1.34-dev-7, created on 2021-09-27 10:50:44
  from '/var/www/html/shop/views/default/user/registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_615177d4572f12_43709327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e3dca3caa6b1839d5f5314f66ccf986caf99cde' => 
    array (
      0 => '/var/www/html/shop/views/default/user/registration.tpl',
      1 => 1629965591,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_615177d4572f12_43709327 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row">
        <?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="col-md-10">
            <div class="row">
                <div class="col-8 mx-auto">
                    <?php if (empty($_smarty_tpl->tpl_vars['userRegisterData']->value)) {?>
                        <div class="user-authorization-box">
                            <h5 class="text-center font-italic mt-2">Регистрация</h5>
                            <form id="userRegisterForm" class="mt-2" action="#" method="POST">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Пароль">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control"
                                           name="confirmPwd" placeholder="Повторите пароль">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="userName" placeholder="Имя">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="userPhone" placeholder="Телефон">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="userAddress" placeholder="Адрес">
                                </div>
                                <button type="submit" id="btnUserRegister"
                                        class="btn btn-primary">Зарегистрироваться</button>
                            </form>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
