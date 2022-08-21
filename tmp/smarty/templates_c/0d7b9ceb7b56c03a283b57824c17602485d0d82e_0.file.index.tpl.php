<?php
/* Smarty version 3.1.34-dev-7, created on 2021-09-17 14:21:33
  from '/var/www/html/shop/views/default/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61447a3d86e688_55140475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d7b9ceb7b56c03a283b57824c17602485d0d82e' => 
    array (
      0 => '/var/www/html/shop/views/default/index.tpl',
      1 => 1631877692,
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
function content_61447a3d86e688_55140475 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/shop/library/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row">
        <?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="col-md-10">
            <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lastProducts']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <div class="col-md-6 col-lg-4 mt-3">
                        <div class="card">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/products/<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
"
                                 class="card-img-top" alt="picture">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],10);?>
</h5>
                                <p class="card-text"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['description'],50);?>
</p>
                                <a href="/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" class="btn btn-primary">Смотреть</a>
                            </div>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <div class="row">
                <div class="col">
                    <ul class="pagination justify-content-center">
                        <li class="page-item <?php if ($_smarty_tpl->tpl_vars['paginator']->value['currentPage'] <= 1) {
echo 'disabled';
}?>">
                            <a class="page-link"
                               href="<?php if ($_smarty_tpl->tpl_vars['paginator']->value['currentPage'] <= 1) {
echo '#';?>

                                <?php } else {
echo '/index/?page=';
echo $_smarty_tpl->tpl_vars['paginator']->value['currentPage']-1;
}?>">&lt;</a>
                        </li>
                        <li class="page-item <?php if ($_smarty_tpl->tpl_vars['paginator']->value['currentPage'] >= $_smarty_tpl->tpl_vars['paginator']->value['pageCount']) {
echo 'disabled';
}?>">
                            <a class="page-link"
                               href="<?php if ($_smarty_tpl->tpl_vars['paginator']->value['currentPage'] >= $_smarty_tpl->tpl_vars['paginator']->value['pageCount']) {?>}<?php echo '#';?>

                                <?php } else {
echo '/index/?page=';
echo $_smarty_tpl->tpl_vars['paginator']->value['currentPage']+1;
}?>">&gt;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
