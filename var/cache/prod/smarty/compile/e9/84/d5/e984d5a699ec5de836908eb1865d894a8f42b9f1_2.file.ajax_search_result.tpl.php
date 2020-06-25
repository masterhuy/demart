<?php
/* Smarty version 3.1.33, created on 2020-06-25 08:58:20
  from 'D:\xamppp\htdocs\jms_demart\modules\jmsadvsearch\views\templates\hook\ajax_search_result.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef4591c5ebe71_68968282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e984d5a699ec5de836908eb1865d894a8f42b9f1' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\modules\\jmsadvsearch\\views\\templates\\hook\\ajax_search_result.tpl',
      1 => 1593071748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef4591c5ebe71_68968282 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="result_div zzzz">
	<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
		<div class="results">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
				<div class="item">
				<?php if ($_smarty_tpl->tpl_vars['show_image']->value) {?>
					<div class="left-img">
						<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" class="product_image">
							<img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'small_default');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" />
						</a>
					</div>
				<?php }?>
					<div class="right-info">
						<a class="product-link" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],50,'...' ));?>
">
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],35,'...' ));?>

						</a>
						<?php if ($_smarty_tpl->tpl_vars['description']->value) {?>
							<p class="product-description"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['desc'],$_smarty_tpl->tpl_vars['count_description']->value,'...' ));?>
</p>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['show_price']->value) {?>
							<div class="content_price">
								<span class="price new"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span>
							</div>
						<?php }?>
					</div>
				</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	<?php } else { ?>
		<?php echo $_smarty_tpl->tpl_vars['no_text']->value;?>

	<?php }?>
</div>
<?php }
}
