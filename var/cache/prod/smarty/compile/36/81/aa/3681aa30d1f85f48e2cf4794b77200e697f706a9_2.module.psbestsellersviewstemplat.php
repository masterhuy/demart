<?php
/* Smarty version 3.1.33, created on 2020-05-27 11:01:34
  from 'module:psbestsellersviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ece3a7e9e8654_79863741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3681aa30d1f85f48e2cf4794b77200e697f706a9' => 
    array (
      0 => 'module:psbestsellersviewstemplat',
      1 => 1590119865,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product-flex.tpl' => 1,
  ),
),false)) {
function content_5ece3a7e9e8654_79863741 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="topseller-block">
	<div class="title-block">
		<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Top Sellers','d'=>'Modules.Bestsellers.Shop'),$_smarty_tpl ) );?>
</h3>
	</div>
	<div class="products">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
			<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product-flex.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</section>
<?php }
}