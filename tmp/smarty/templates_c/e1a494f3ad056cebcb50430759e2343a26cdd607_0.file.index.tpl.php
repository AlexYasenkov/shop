<?php
/* Smarty version 3.1.34-dev-7, created on 2021-09-17 14:27:56
  from '/var/www/html/shop/views/default/cart/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61447bbc0c7e94_04503993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1a494f3ad056cebcb50430759e2343a26cdd607' => 
    array (
      0 => '/var/www/html/shop/views/default/cart/index.tpl',
      1 => 1630419478,
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
function content_61447bbc0c7e94_04503993 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row">
        <?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="col-md-10">
            <div class="row">
                <div class="col mt-2">
                    <?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
                        <form action="/cart/order" method="POST">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Наименование</th>
                                    <th>Кол-во</th>
                                    <th>Цена за шт.</th>
                                    <th>Цена</th>
                                    <th>Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'products', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
                                <tr>
                                    <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null);?>
</td>
                                    <td>
                                        <a href="/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a>
                                    </td>
                                    <td>
                                        <input class="product-count w-100" id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" type="number"
                                               name="productCount_<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" value="1" min="1">
                                    </td>
                                    <td>
                                        <span id="productPrice_<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['id'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
"
                                              data-product-price = <?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span>
                                    </td>
                                    <td>
                                        <span id="productRealPrice_<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['id'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span>
                                    </td>
                                    <td>
                                        <a href="#" id="btnRemove_<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" data-id = "<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"
                                           class="btn-remove-from-cart btn btn-danger btn-sm"
                                           role="button">Удалить из корзины</a>
                                        <a href="#" id="btnAdd_<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" data-id = "<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"
                                           class="btn-to-cart btn btn-success btn-sm d-none"
                                           role="button">Вернуть в корзину</a>
                                    </td>
                                </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                            <?php if ((isset($_smarty_tpl->tpl_vars['userRegisterData']->value))) {?>
                                <button type="submit" class="btn btn-success">Оформить заказ</button>
                            <?php } else { ?>
                                <h6 class="text-center font-italic">Для оформления заказа необходимо войти в систему</h6>
                            <?php }?>
                        </form>
                    <?php } else { ?>
                        <h6 class="text-center font-italic">В корзине пусто</h6>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
