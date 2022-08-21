<?php
/* Smarty version 3.1.34-dev-7, created on 2021-09-27 10:50:47
  from '/var/www/html/shop/views/default/product/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_615177d7826aa4_17355874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a66b710773bf7b28825228873f41f1801fe6b7e' => 
    array (
      0 => '/var/www/html/shop/views/default/product/index.tpl',
      1 => 1629117012,
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
function content_615177d7826aa4_17355874 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row">
        <?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="col-md-10">
            <div class="row">
                <div class="col mt-3">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/products/<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
"
                         class="img-fluid" alt="picture">
                    <h4 class="mt-3"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h4>
                    <p class="text-secondary"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</p>
                    <p class="h5">Цена: <span class="text-success"><?php echo floatval($_smarty_tpl->tpl_vars['product']->value['price']);?>
</span> грн</p>
                    <a href="#" id="btnAdd_<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" data-id = "<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"
                       class="btn-to-cart btn btn-success btn-sm" role="button">Добавить в корзину</a>
                    <a href="#" id="btnRemove_<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" data-id = "<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"
                       class="btn-remove-from-cart btn btn-danger btn-sm d-none" role="button">Удалить из корзины</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
