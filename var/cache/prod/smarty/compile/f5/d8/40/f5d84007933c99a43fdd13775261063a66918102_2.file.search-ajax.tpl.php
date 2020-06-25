<?php
/* Smarty version 3.1.33, created on 2020-06-25 09:06:59
  from 'D:\xamppp\htdocs\jms_demart\modules\hotdeals\views\templates\hook\search-ajax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef45b232ba389_41479931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5d84007933c99a43fdd13775261063a66918102' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\modules\\hotdeals\\views\\templates\\hook\\search-ajax.tpl',
      1 => 1542078179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef45b232ba389_41479931 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['products']->value) {
echo '<script'; ?>
>
function select_product(product_name,id_product) {
	$('#product').val(product_name);
	$('#id_product').val(id_product);
}	

function hide_product(){
	$("#result_products").hide();
}

<?php echo '</script'; ?>
>	
<ul>	
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
		<li class="item">			
			<a title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],50,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" onclick="select_product('<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
',<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
); hide_product();"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>				
		</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
</div>
<?php } else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"There is no product",'d'=>'Shop.Theme'),$_smarty_tpl ) );?>

<?php }
}
}
