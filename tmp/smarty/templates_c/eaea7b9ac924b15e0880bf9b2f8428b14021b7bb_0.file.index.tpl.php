<?php
/* Smarty version 3.1.34-dev-7, created on 2021-09-15 18:12:40
  from '/var/www/html/shop/views/admin/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61420d68992f32_73375143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eaea7b9ac924b15e0880bf9b2f8428b14021b7bb' => 
    array (
      0 => '/var/www/html/shop/views/admin/index.tpl',
      1 => 1631718759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61420d68992f32_73375143 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row">
        <div class="col">
            <h5 class="mt-2">Загрузка изображения</h5>
            <form action="admin/upload" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="file" class="form-control-file" name="fileName">
                </div>
                <input type="hidden" name="itemId" value="5">
                <button type="submit" class="btn btn-primary">Загрузить</button>
            </form>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
